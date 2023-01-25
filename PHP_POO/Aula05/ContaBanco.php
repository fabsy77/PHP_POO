<?php
class ContaBanco {

// ATRIBUTOS
public $numConta;
protected $tipo;// CC Conta corrente/CP Conta Poupanca
private $dono;
private $saldo;//real (double)
private $status;//true á para a conta foi aberta c sucesso ou false se a conta nao foi aberta

//Metodos
Public function abrirConta($tp){
    //ativa a conta
    $this->setTipo($tp);
    $this->setStatus(true);

    if($tp == "CC"){
        $this->setSaldo(50);
    }
    elseif($tp == "CP"){
        $this->setSaldo(150);
    }
}
Public function fecharConta(){
    if($this->getSaldo() > 0 ){
        echo "<p>ERRO! Conta com dinheiro, o senhor não pode fechar ainda. Primeiro saque seu dinheiro</p>";
    }
    elseif($this->getSaldo() < 0){
        echo "<p>ERRO! Conta em debito, favor procurar a gerencia.</p>";
    }
    else {//pq nao posso colocar getsaldo == 0??
        $this->setStatus(false);
        echo "<p>{$this->getDono()}, sua conta foi fechada com sucesso!</p>";
    }
}
Public function depositar($valor){
    //o que eu tinha de dinheiro mais o que eu to depositando
    if ($this->getStatus()) {//verifica se a pessoa tem conta aberta
        $this->setSaldo( $this->getSaldo() + $valor);//setSaldo é modifique o saldo
        echo "<p>Deposito de R$ $valor na conta de {$this->getDono()}!</p>";
    }
    else {
        echo "Impossivel depositar";
    }
}
Public function sacar($valor){
    if ($this->getStatus()) {//se a conta esta ativa
        if ($this->getSaldo() >= $valor) {
            $this->setSaldo($this->getSaldo() - $valor);
            echo "<p>Saque de R$ $valor autorizado na conta de {$this->getDono()}!</p>";
        }
        else {
            echo "<p>Saldo insuficiente</p>";
        }
    }
    else {
        echo "Impossivel sacar pois nao ha uma conta aberta";
    }

}
Public function pagarMensal(){
    if ($this->getTipo() == "CC") {
        $valor = 12;
    }
    elseif ($this->getTipo() == "CP") {
        $valor = 20;
    }
    if ($this->getStatus() == true) {
        if ($this->saldo > $valor) {// se o saldo for maior que o valor q eu tenho que sacar
            $this->setSaldo($this->getSaldo() - $valor);
            echo "<p>Mensalidade R$ $valor debitada na conta de {$this->getDono()}!</p>";
        }
        else {
            echo "Saldo insuficiente";
        }
    }
    else {
        echo "<p>impossivel pagar pois nao ha uma conta aberta</p>";
    }
}

//Construtor
public function __construct()
{
    $this->setSaldo(0); // $this->saldo = 0;
    $this->getStatus(false);  // $this->status = false;
    echo "<p>Conta criada c sucesso</p>";
}
// METODOS Getters & Setters (get e set)
public function getnumConta() {
    return $this->numConta;
}
public function setnumConta($nc) {
    $this->numConta = $nc;
}
public function getTipo(){
    return $this->tipo;
}
public function setTipo($tp){
    $this->tipo = $tp;
}
public function getDono(){
    return $this->dono;
}
public function setDono($dono){
    $this->dono = $dono;
}
public function getSaldo(){
    return $this->saldo;
}
public function setSaldo($sd){
    $this->saldo = $sd;
}
public function getStatus(){
    return $this->status;
}
public function setStatus($status){
    $this->status = $status;
} 

}
?>






