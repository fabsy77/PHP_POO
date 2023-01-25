<?php
class Caneta {
    //Modificadores de Visibilidade
    //Atributos
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada; //False or true

    //Metodos
    public function rabiscar(){
        //A palavra this é para verificar um atributo dentro da classe
       // se a caneta estiver tampada
        if ($this->tampada == true) {
            echo "<p>ERRO! Nao posso rabiscar";
        }
        else{
            echo "Estou rabiscando...</p>";
        }
    }
    //metodo q da acesso ao atributo q esta protegido (tampada)
    public function tampar(){
        $this->tampada =true;
    }
    public function destampar(){
        $this->tampada = false;
    }
}
?>