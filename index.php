<?php
require_once 'controllers/CustomerController.php';
$url = isset($_GET['url']) == true ? $_GET['url'] : "/" ;
switch($url){
    case '/' :
        // Điều hướng vè hàm listProduct 
        $CustomerController = new CustomerController();
        $CustomerController->listCustomer();
        break; 

    case 'form_add':    
        $CustomerController = new CustomerController();
        $CustomerController->form_add();       
        break;
        
    case 'add_customer':    
        $CustomerController = new CustomerController();
        $CustomerController->add_customer();       
        break;
    case 'delete-customer':
        $CustomerController = new CustomerController();
        $CustomerController->deleteCus();
       break;
    case 'edit-customer':   
        $CustomerController = new CustomerController();
        $CustomerController->edit_customer();
        break;

    case 'update-customer':
        $CustomerController = new CustomerController();

        $CustomerController->update_customer();
            break;
}