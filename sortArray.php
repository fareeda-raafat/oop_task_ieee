<?php

class SortArray{

    private $arr = [];


    function __construct($arr)
    {
        $this->arr = $arr;
    }


   public function sort_array()
    {
        sort($this->arr);
        return $this->arr;
    }
    

}


?>