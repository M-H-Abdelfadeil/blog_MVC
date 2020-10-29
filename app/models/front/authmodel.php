<?php

namespace BLOG\Models\front;
class AuthModel{

    private $db;
    public function __construct(){
       $this->db=new \BLOG\LIB\Database();
    }

    public function isFoundEmail($email){

       $data= $this->db->fetchDatabase('email','users','email="'.$email.'"');
       if ($data)return 1;
       else return 0;
    }

    public function register($name,$email,$password){
        $this->db->insertDatabase(
            'users',
            'name , email , password',
            ' "'.$name.'" , "'.$email.'"  , "'.$password.'" '
            );
        return $this->db->getLastInsertId();

    }

    public function login($email,$password){
        $data= $this->db->fetchDatabase('*','users','email="'.$email.'"');
        if ($data){
            if (password_verify($password,$data['password'])){
                return[
                  'id'=>$data['id'],
                  'name'=>$data['name']
                ];
            }else {
                return 0;
            }
        }else{
            return 0;
        }
    }

}
