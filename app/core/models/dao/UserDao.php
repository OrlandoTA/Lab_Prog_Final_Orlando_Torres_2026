<?php

namespace app\core\models\dao;
use PDO;
use app\core\models\dto\UserDto;
use app\core\models\dao\base\BaseDao;
use app\core\models\dao\base\InterfaceDao;

final class UserDao extends BaseDao implements InterfaceDao{

    public function __construct(\PDO $conn)
    {
        parent::__construct($conn, "usuarios");
    }



    public function login(string $usuario): array{

        $sql = "SELECT
                    user.id,
                    user.usuario,
                    user.clave,
                    
                FROM usuarios AS user
                WHERE (user.usuario = :usuario)";

        $result = $this->selectQuery($sql, [
            "usuario" => $usuario
        ]);

        if(count($result) !== 1){
            throw new \Exception("El nombre de usuario o la contraseña no coinciden.");
        }

        return $result[0];
    }


}