<?php

class Calculater{

    private $num1  , $num2 ;

function __construct($num1,$num2)
{
    $this->num1 = $num1;
    $this->num2 = $num2;

}


 function add()
{
  return $this->num1 + $this->num2 ;
}
   

function sub()
{
    return $this->num1 - $this->num2 ;
}

function multi()
{
    return $this->num1 * $this->num2 ;
}

function div()
{
    if($this->num2 == 0)
    {
        return "cant divide on 0 ";
    }else{
    return $this->num1 / $this->num2 ;
    }
}
}

?>