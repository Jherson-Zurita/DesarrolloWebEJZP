<?php
class Operaciones{

    private  $num1;
    private  $num2;

    public function __construct($a,$b){
        $this->num1 = $a;
        $this->num2 = $b;
    }
    
    public function Suma(){
        return $this->num1 + $this->num2;  
    } 
    
    public function Resta() {
        return $this->num1 - $this->num2;  
    }

    public function Multiplicar(){
        return $this->num1 + $this->num2;  
    }

    public function Dividir(){
        return $this->num1 / $this->num2;  
    }

}
?>