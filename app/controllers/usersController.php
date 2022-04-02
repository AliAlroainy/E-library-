<?php

namespace coding\app\controllers;

use coding\app\models\User;

class UsersController extends Controller{

    function listAll($parameters=null){

        $parameters['status'];
        $Users=new User();
        $allUsers=$Users->getAll();
        //print_r($allUsers);

        $this->view('list_users',$allUsers);

    }
    function create(){
        $this->view('add_user');

    }

    function store(){
        // print_r($_POST);
        // print_r($_FILES);
        $user=new User();
        
        $user->name=$_POST['user_name'];
        $imageName=$this->uploadFile($_FILES['image']);

        $user->image=$imageName!=null?$imageName:"default.png";
        $user->created_by=1;
        $user->is_active=$_POST['is_active'];

        $user->save();
        $this->view('add');

    }
    function edit($params=[]){

        $cat=new user();
        $result=$cat->getSingleRow($params['id']);
        $this->view('edit_user',$result);
        

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