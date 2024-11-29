<?php

class User{

	private string $id_username;

	private string $nome;
    private string $username;
    private string $password;
    private bool $ativo;


	public function getAtivo()
	{
		return $this->ativo;
	}

	public function setAtivo($ativo)
	{
		$this->ativo = $ativo;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}

public function getId_username()
{
	return $this->id_username;
}

public function setId_username($id_username)
{
	$this->id_username = $id_username;
}

public function getNome(){
	return $this->nome;
}

public function setNome($nome){
	$this->nome = $nome;
}
}