<?php

class EditarUsuario
{
    public function retornar()
    {
        $usuario = (new UserBanco)->buscarPorUsername($_GET['id']);
        require __DIR__."/../../editar-usuario.php";
       
        }
}
