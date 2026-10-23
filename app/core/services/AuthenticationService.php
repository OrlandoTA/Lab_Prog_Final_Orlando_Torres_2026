<?php

namespace app\core\services;

use app\core\models\dao\UserDao;
use app\libs\database\Connection;
use app\libs\password\Password;
use app\core\models\dto\UserDto;


final class AuthenticationService{
   public function login(string $user, string $pass): void
    {
        $conn = Connection::get();

        $usuarioDao = new UserDao($conn);
        $usuario = $usuarioDao->login($user);

        if(!$usuario){
            throw new \Exception('El usuario o la clave es incorrecta.');
        }

        if(!Password::verify($pass, $usuario['clave'])){
            throw new \Exception('El usuario o la clave es incorrecta.');
        }

        if(Password::needsRehash($usuario['clave'])){
            $usuarioDao->updatePassword(Password::hash($pass), (int)$usuario['id']);
        }

        session_regenerate_id(true);

        $_SESSION["token"] = APP_TOKEN;
        $_SESSION["usuarioId"] = (int)$usuario["id"];
        $_SESSION["usuario"] = $usuario["nombres"];
        $_SESSION["perfil"] = "administrador"; //Es el unico tipo de perfil que va a haber
        $_SESSION["motivoCierreSesion"] = SESSION_FINISHED;
    }

    public function logout():void{
        session_unset();
        if (ini_get("session.use_cookies")){
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params["path"],
            $params["domain"], $params["secure"], $params["httponly"]);
            }
        session_destroy();
    }

   
}