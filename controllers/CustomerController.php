<?php
require_once 'models/Customer.php';
class CustomerController
{
   public function listCustomer()
    {
        $customer = new Customer();
        $customers = $customer->getCustomer();
        // var_dump($customers);
        // die;
        include_once 'views/customer/list.php';
    }
   public function form_add()
    {
        include_once 'views/customer/add.php';
    }
   public function add_customer()
    {
        $customer = new Customer();
        if (isset($_POST['submit'])) {
            $ten = $_POST['ten'];
            $tuoi = $_POST['tuoi'];
           $customers = $customer-> addCustomer($ten, $tuoi);
        }
        $customers = $customer-> getCustomer();
        include_once 'views/customer/list.php';
    }
   public function deleteCus()
    {
        $customer = new Customer();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $custom = $customer-> del($id);
            $customers = $customer-> getCustomer();
            include_once 'views/customer/list.php';
        }
    }
   public function edit_customer()
    {
        $customer = new Customer();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $custom = $customer->getEdit($id);
            include_once 'views/customer/edit.php';
        }
    }
   public function update_customer()
    {
        $customer = new Customer();
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $ten = $_POST['ten'];
            $tuoi = $_POST['tuoi'];
            $custom = $customer-> getUpdate($id, $ten, $tuoi);
            $customers = $customer->getCustomer();
            include_once 'views/customer/list.php';
        }
    }
}
