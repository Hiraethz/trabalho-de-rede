<?php

class CadastrarUsuario{
    public function retornar(){
      $usuario = (new UserBanco())->cadastrarUsuario($_POST['usuario'],$_POST['nome'],$_POST['senha'],$_POST['ativo']);
      if($usuario){
        return "Usuario cadastrado!";
      };
      return "Usuario não cadastrado!";
    }
}
