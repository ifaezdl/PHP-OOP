<?php
class calc{

    public $operator;
    public $num1;
    public $num2;
    
    public function __construct(string $one,int $two,int $three){
    
        $this->operator=$one;
        $this->num1=$two;
        $this->num2=$three;
    }

    public function calculator(){
        switch ($this->operator) {
            case 'Addition':
               $result=$this->num1+$this->num2;
               return $result;
                break;
            case 'substraction':
                $result=$this->num1-$this->num2;
                return $result;
                break;
            case 'division':
                $result=$this->num1/$this->num2;
                return $result;
                break;
            case 'multiplication':
                $result=$this->num1*$this->num2;
                return $result;
                break;        
            default:
           echo 'error!' ;
                break;
        }
    } 
    
    }
?>