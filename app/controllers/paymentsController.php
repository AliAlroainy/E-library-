<?php

namespace coding\app\controllers;

use coding\app\models\Payment;

class PaymentsController extends Controller{

    function listAll($parameters=null){

        $parameters['status'];
        $Payments=new Payment();
        $allPayments=$Payments->getAll();
        //print_r($allPayments);

        $this->view('list_payment',$allPayments);

    }



    function create(){
        $this->view('add_payment');

    }

    function store(){
        // print_r($_POST);
        // print_r($_FILES);
        $payment=new Payment();
        
        $payment->name=$_POST['payment_name'];
        $imageName=$this->uploadFile($_FILES['image']);

        $payment->image=$imageName!=null?$imageName:"default.png";
        $payment->created_by=1;
        $payment->is_active=$_POST['is_active'];

        $payment->save();
        $this->view('add');

    }
    function edit($params=[]){

        $cat=new payment();
        $result=$cat->getSingleRow($params['id']);
        $this->view('edit_payment',$result);
        

    }
    function update(){

    }
    public function remove($params=[]){
        echo "remove function";

    }


    public static function uploadFile(array $imageFile): string
    {
        // check images direction
        if (!is_dir(__DIR__ . '/../../public/images')) {
            mkdir(__DIR__ . '/../../public/images');
        }

        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);

            $imageName = uniqid(). "." . $imageExtension;
            $imagePath =  __DIR__ . '/../../public/images/' . $imageName;

            move_uploaded_file($imageFile['tmp_name'], $imagePath);

            return $imageName;
        }

        return null;
    }

    




}

?>