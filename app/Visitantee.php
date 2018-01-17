<?php
class Visitante{
	public $nome;
  public $datadenascimento;
	public $email;
	public $celular;
	public $cep;
	public $Rua;
	public $numero;
  public $bairro;
  public $cidade;
  public $estado;



	function iniciaVisitante($nome_ , $datadenascimento_ , $celular_ ,	$cep_ , $rua_ , $numero_ , $bairro_ , $cidade_ , $estado_) {
			$this->nome = $nome_;
      $this->datadenascimento = $datadenascimento_;
			$this->email  = $email_;
			$this->celular = $celular_;
			$this->cep = $cep_;
			$this->rua = $rua_;
      $this->numero = $numero_;
      $this->bairro = $bairro_;
      $this->cidade = $cidade_;
      $this->estado = $estado_;
	}
  function insereVisitante(){
   $SQL = $conn->prepare("INSERT INTO visitante (nome, datadenascimento, email, celular, cep, rua, numero, bairro, cidade, estado) VALUES (:nome, :datadenascimento , :email, :celular, :cep, :rua, :numero, :bairro, :cidade, :estado)");
   $idVisitante = $this->retornaProximaId();
   $SQL->bindParam(':nome', $nome);
   $SQL->bindParam(':datadenascimento', $datadenascimento);
   $SQL->bindParam(':email', $this->email);
   $SQL->bindParam(':celular', $this->celular);
   $SQL->bindParam(':cep', $this->cep);
   $SQL->bindParam(':rua', $this->rua);
   $SQL->bindParam(':numero', $this->numero);
   $SQL->bindParam(':bairro', $this->bairro);
   $SQL->bindParam(':cidade', $this->cidade);
   $SQL->bindParam(':estado', $this->estado);
   $SQL->execute();
  }
}
