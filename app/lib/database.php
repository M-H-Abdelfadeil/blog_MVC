<?php
namespace BLOG\LIB;
class Database
{

    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $name = DB_NAME;
    private $conn;

    // connect data base
    function __construct(){
        try {
            $this->conn=new \PDO (
                "mysql:host=$this->host;dbname=$this->name",
                $this->user,
                $this->pass
                ,
                array(
                    \PDO::ATTR_DEFAULT_FETCH_MODE=>\PDO::FETCH_ASSOC
                )
            );
        } catch (PDOException $e) {
            echo 'error connect database' . $e->getmessage();
        }
    }
    //  insert database
    public function insertDatabase($table,$column,$values){
        $query = $this->conn->prepare("INSERT INTO $table ($column) VALUES($values)");
        if ($query->execute()) {
            return true;
        }else{
            return false;
        }
    }
    //  fetch all database
    public function fetchAllDatabase($column,$table,$where=null,$orderBy=null,$limit=null){
        if ($where!=null) {
            $where='WHERE '.$where;
        }
        if ($orderBy!=null) {
            $orderBy='ORDER BY '.$orderBy;
        }
        if ($limit!=null) {
            $limit='LIMIT '.$limit;
        }
        $query = $this->conn->prepare("
			SELECT $column FROM $table $where $orderBy $limit
			");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    //  fetch  database
    public function fetchDatabase($column,$table,$where=null,$orderBy=null,$limit=null){
        if ($where!=null) {
            $where='WHERE '.$where;
        }
        if ($orderBy!=null) {
            $orderBy='ORDER BY '.$orderBy;
        }
        if ($limit!=null) {
            $limit='LIMIT '.$limit;
        }
        $query = $this->conn->prepare("
			SELECT $column FROM $table $where $orderBy $limit
			");
        $query->execute();
        $data = $query->fetch();
        return $data;
    }

    public function updateDatabase($table,$colVal,$where=null,$limit=null){
        if ($where!=null) {
            $where='WHERE '.$where;
        }
        if ($limit!=null) {
            $limit='LIMIT '.$limit;
        }
        $query = $this->conn->prepare("UPDATE  $table SET  $colVal  $where  $limit");
        if ($query->execute()) {
            return true;
        }else{
            return false;
        }
    }

    // get last insert id

    public function getLastInsertId(){
        return $this->conn->lastInsertId();
    }


}