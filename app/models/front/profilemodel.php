<?php

namespace BLOG\Models\front;
class ProfileModel{

    private $db;
    public function __construct(){
        $this->db=new \BLOG\LIB\Database();
    }

    public function index($id){
        return $this->db->fetchDatabase('name , email , date_join','users','id="'.$id.'"');
    }

}
