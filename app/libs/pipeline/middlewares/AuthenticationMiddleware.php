<?php

namespace app\libs\pipeline\middlewares;

use app\libs\pipeline\middlewares\base\Middleware;
use app\libs\pipeline\middlewares\base\InterfaceMiddleware;
use app\libs\http\Request;
use app\libs\http\Response;

/**
 * Descripción de AuthenticationMiddleware
 *
 * @author Ing. Jose Rasjido
 */

final class AuthenticationMiddleware extends Middleware implements InterfaceMiddleware {
    
    public function __construct() {
        parent::__construct();
    }
    public function process(Request $request, Response $response): void {

        session_start();

        if (isset($_SESSION["token"]) && ($_SESSION["token"] === APP_TOKEN)) {

            if ($_SESSION["motivoCierreSesion"] != 0) {
                $request->setController(APP_AUTHENTICATION_CONTROLLER);
                $request->setAction(APP_LOGOUT_ACTION);
            }

        } else {

            $request->setController(APP_AUTHENTICATION_CONTROLLER);

            $accionesPublicas = [
                APP_LOGIN_ACTION,
                "passReset"
            ];

            if (!in_array($request->getAction(), $accionesPublicas)) {
                $request->setAction(APP_DEFAULT_ACTION);
            }

        }
            /*
        else {

    // Rutas que pueden accederse sin iniciar sesión
    $rutasPublicas = [
        "authentication" => [
            APP_LOGIN_ACTION,
            "passReset"
        ],
        "user" => [
            "create",
            "save"
        ]
    ];

    $controller = $request->getController();
    $action = $request->getAction();

    // Si la ruta no está permitida, enviar al login
    if (
        !isset($rutasPublicas[$controller]) ||
        !in_array($action, $rutasPublicas[$controller])
    ) {
        $request->setController(APP_AUTHENTICATION_CONTROLLER);
        $request->setAction(APP_DEFAULT_ACTION);
    }

}*/

        $this->processNext($request, $response);
    }

    

    
}