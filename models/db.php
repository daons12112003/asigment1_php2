<?php
require_once 'env.php';

// tạo kết nối từ project php sang mysql
class DB {
    public $connect;
    public function __construct(){
        $this->connect = new PDO("mysql:host=" . DBHOST
            . ";dbname=" . DBNAME
            . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );
        
    }
    
  public function getData($query, $getAll = true){
        // $conn = getConnect();
    
        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        if($getAll){
            return $stmt->fetchAll();
        }
    
        return $stmt->fetch();
    }
}

?>