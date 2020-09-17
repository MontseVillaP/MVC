<?php

class conversor{
 
    private $n1;
	private $n2;
	private $n3;
	private $result;

function __construct(){
            $this->n1=0;
            $this->n2=0;
            $this->n3=0;
            $this->result=0;
            
        }

        public function setValores($n1,$n2,$n3){
            $this->n1=$n1;
            $this->n2=$n2;
            $this->n3=$n3;
            
        }
       public function getValores(){

            $cadena="El resultado es: ".$this->result;
            return $cadena;
        }
        public function cm(){
            $this->result=$this->n1*100;
        }
        public function mm(){
            $this->result=$this->n1*1000;
        }
        public function km(){
            $this->result=$this->n1/1000;
        }
        public function dc(){
            $this->result=$this->n2*10;
        }
        public function ml(){
            $this->result=$this->n2*1000;
        }
        public function mg(){
            $this->result=$this->n3*1000000;
        }
        public function gr(){
            $this->result=$this->n3*1000;
        }

}
?>