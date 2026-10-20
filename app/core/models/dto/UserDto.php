<?php

namespace app\core\models\dto;


use app\libs\password\Password;

final class UserDto{

    private string $usuario, $clave;
    private int $id;

    public function __construct(array $data = [])
    {
        $this->setId($data['id'] ?? 0);
        $this->setUsuario($data['usuario']?? "");
        $this->setClave($data['clave'] ?? "");
        
    }

    /** GETTERS */

    public function getId(): int{
        return $this->id;
    }

    public function getClave(): string{
        return $this->clave;
    }

    public function getUsuario(): string{
        return $this->usuario;
    }

    /** SETTERS */

    public function setId(int $id): void{
        $this->id = ($id > 0) ? $id : 0;
    }

    

    public function setUsuario(string $usuario): void{
        $usuarioTrimeado = trim($usuario);
        $this->usuario = (strlen($usuarioTrimeado) > 0 && strlen($usuarioTrimeado) <= 100) ? $usuarioTrimeado : "";
    }


    public function setClave(string $clave): void{

        if(empty($clave)){
            $this->clave = "";
            return;
        }

        if(str_starts_with($clave, '$2y$')){
            $this->clave = $clave;
            return;
        }

        $this->clave = (strlen($clave) > 0 && strlen($clave) <= 20) ? Password::hash($clave) : "";
    }



    public function toArray(){
        return [
            'id'        => $this->getId(),
            'nombres'   => $this->getUsuario(),
           
            'clave'     => $this->getClave(),

        ];
    }


}