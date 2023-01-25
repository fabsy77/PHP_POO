<?php
class Caneta {
    //Modificadores de Visibilidade
    //Atributos
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada; //False or true

    // construtor
    public function __construct ($m, $c, $p){
        $this->modelo = $m; // $this->setmodelo = $m; posso fazer desse jeito se tivesse setado
        $this->cor = $c;
        $this->ponta= $p;
        $this->tampar();
    }
    //metodo q da acesso ao atributo q esta protegido (tampada)
    public function tampar() {
        $this->tampada = true;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($m) {
        $this->modelo = $m;
    }
    public function getCor() {
        return $this->cor;
    }
    public function setCor($c) {
        $this->cor = $c;
    }

    public function getPonta() {
        return $this->ponta;
    }
    public function setPonta($p) {
        $this->ponta = $p;
    }

  
    
}
?>
