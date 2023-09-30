<?php
require_once "models/db.php";
class Customer extends DB{
   public function getCustomer(){
        $sql = "SELECT * FROM customers";
        return $this->getData($sql);
    }
   public function addCustomer( $ten, $tuoi){
        $sql = " INSERT INTO `customers`( `ten`, `tuoi`) VALUES ('$ten','$tuoi') ";
        return $this->getData($sql, false);
    }
   public function del($id){
        $sql = "DELETE FROM customers WHERE `id` = '$id' ";
        return $this->getData($sql, false);
    }
   public function getEdit($id){
        $sql = "SELECT * FROM customers WHERE `id` = '$id' ";
        return $this->getData($sql, false);
    }
   public function getUpdate($id, $ten, $tuoi){
        $sql = " UPDATE `customers` SET `ten`='$ten',`tuoi`='$tuoi' WHERE `id`='$id'";
         $this->getData($sql, false);
    }
    
}
