<?php
class UserBanco{
    private $pdo;

    public function __construct()
    {
        require __DIR__."/../Database/Conectar.php";
        $this->pdo = $banco;
    }

    public function cadastrarUsuario($id_usuario,$nome,$senha,$ativo){
        $sql = "INSERT INTO usuarios(id_usuario,nome,senha,perfil_ativo) values (:u,:n,:p,:a)";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("u",$id_usuario);
        $comando->bindValue("n",$nome);
        $comando->bindValue("p",$senha);
        $comando->bindValue("a",$ativo,PDO::PARAM_BOOL);

        return $comando->execute();
    }

    public function editarUsuario($id_usuario,$nome,$senha,$ativo){
        $sql = "INSERT INTO usuarios(id_usuario,nome,senha,perfil_ativo) values (:u,:n,:p,:a)";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("u",$id_usuario);
        $comando->bindValue("n",$nome);
        $comando->bindValue("p",$senha);
        $comando->bindValue("a",$ativo,PDO::PARAM_BOOL);

        return $comando->execute();
    }

    public function buscarPorUsername($u){
        $sql = "SELECT * FROM usuarios WHERE id_usuario=:u";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("u",$u);
        $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

        return $this->hidratar($resultado);
    }

    public function atualizarUsuario($id_usuario,$nome,$senha,$ativo){
        $sql = "UPDATE usuarios set id_usuario = :u, nome = :n, senha = :p, perfil_ativo = :a where nome = :u";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("u",$id_usuario);
        $comando->bindValue("n",$nome);
        $comando->bindValue("p",$senha);
        $comando->bindValue("a",$ativo,PDO::PARAM_BOOL);

        return $comando->execute();
    }

    public function excluirUsuario($nome){
        $sql = "DELETE FROM usuarios WHERE id_usuario = :u";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("u",$nome);

        return $comando->execute();
    }

    public function verificarSeExiste($id_usuario,$senha){
        $sql = "SELECT * FROM usuarios WHERE id_usuario=:u and senha = :p and perfil_ativo = TRUE";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("u",$id_usuario);
        $comando->bindValue("p",$senha);
        $comando->execute();

        return $comando->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listarUsuario(){
        $sql = "SELECT * FROM usuarios";
        $comando = $this->pdo->prepare($sql);
        
        $comando->execute();
        $todosUsuarios = $comando->fetchAll(PDO::FETCH_ASSOC);
        
        return $this->hidratar($todosUsuarios) ;
    }

    public function hidratar($array){
        $todos = [];

        foreach($array as $dado){
            $objeto= new User();
            $objeto->setUsername($dado['id_usuario']);
            $objeto->setNome($dado['nome']);
            $objeto->setPassword($dado['senha']);
            $objeto->setAtivo($dado['perfil_ativo']);
            $todos[]=$objeto;
        }
        return $todos;
    }

}