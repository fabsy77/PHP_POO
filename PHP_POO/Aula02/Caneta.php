<?php
class Caneta
{
    //Atributos
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada; //False or true

    //Metodos
    function rabiscar()
    {
        //A palavra this é para verificar um atributo dentro da classe
        // se a caneta estiver tampada
        if ($this->tampada == true) {
            echo "<p>ERRO! Nao posso rabiscar";
        } else {
            echo "Estou rabiscando...";
        }
    }
    function tampar()
    {
        $this->tampada = true;
    }
    function destampar()
    {
        $this->tampada = false;
    }
}
?>
