<?php

class DiffDate{

public $date1 ;
public $date2 ;

function __construct($date1 , $date2)
{
    $this->date1  = $date1;
    $this->date2 = $date2;
}

function date_result()
{
    $sub = abs(strtotime($this->date1) - strtotime($this->date2));

    $year = floor($sub / (365*60*60*24));
    $month = floor(($sub - $year * 365*60*60*24) / (30*60*60*24));
    $day = floor(($sub - $year * 365*60*60*24 - $month*30*60*60*24)/ (60*60*24));

    printf( 'the diffrence is %x years and %x months and %x days ', $year,$month,$day);

}
 
}

?>