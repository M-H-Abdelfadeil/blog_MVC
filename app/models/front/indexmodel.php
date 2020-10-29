<?php

namespace BLOG\Models\front;
class IndexModel{

    private $db;
    public function __construct(){
       $this->db=new \BLOG\LIB\Database();
    }



}
