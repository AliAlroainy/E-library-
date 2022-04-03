<?php
namespace coding\app\controllers;

use coding\app\models\Cities;

class CitiesController  extends Controller{

 
    function listAll($parameters=null){

        //$parameters['status'];
        $Cities =new Cities();
        $allCities=$Cities->getAll();
        //print_r($allAuthors);

        $this->view('list_cities',$allCities);

    }
    function create(){
        $this->view('add_cities');

    }

    function store(){
        // print_r($_POST);
        // print_r($_FILES);
        $Cities=new Cities();
        
        $Cities->name=$_POST['cities_name'];
    //    $imageName=$this->uploadFile($_FILES['image']);

    //     $author->image=$imageName!=null?$imageName:"default.png";
        $Cities->created_by=1;
    //    $Cities->is_active=$_POST['is_active'];

        $Cities->save();
        $this->view('add');

    }
    function edit($params=[]){

        $cat=new Cities();
        $result=$cat->getSingleRow($params['id']);
        $this->view('edit_cities',$result);
        

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