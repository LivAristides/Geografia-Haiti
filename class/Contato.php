<?php
include_once 'Conectar.php';
class Contato{
private $id;
private $nome;
private $email;

private $descricao;
private $con;

	public function getId() {
		return $this->id;
	}
	
	
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	
	
	public function getNome() {
		return $this->nome;
	}
	
	
	public function setNome($nome) {
		$this->nome = $nome;
		return $this;
	}
	
	public function getEmail() {
		return $this->email;
	}
	
	public function setEmail($email){
		$this->email = $email;
		return $this;
	}
	public function getDescricao() {
		return $this->descricao;
	}
	
	public function setDescricao($descricao){
		$this->descricao = $descricao;
		return $this;
	}

	public function salvar(){
		try{

		$this->con = new Conectar();
		$sql = "INSERT INTO contato  VALUES (null, ?, ?, ?);";
		$executar = $this->con->prepare($sql);
		$executar->bindValue(1, $this->nome);
        $executar->bindValue(2, $this->email);
		$executar->bindValue(3, $this->descricao);
		return $executar->execute() == 1 ? true:false;
		}catch (PDOException $e){
			echo "Erro de bd" . $e->getMessage();
		}
	}
	public function listar(){
		try{

		$this->con = new Conectar();
		$sql = " SELECT * FROM contato";
		$executar = $this->con->prepare($sql);
		return $executar->execute() == 1 ? $executar->fetchAll() : false;
		}catch (PDOException $e){
			echo "Erro de bd" . $e->getMessage();
		}
	}
}
