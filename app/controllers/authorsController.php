<?php
namespace coding\app\controllers;

use coding\app\models\Author;

class AuthorsController  extends Controller{

 
    function listAll($parameters=null){

        //$parameters['status'];
        $Authors=new Author();
        $allAuthors=$Authors->getAll();
        //print_r($allAuthors);

        $this->view('list_authors',$allAuthors);

    }
    function create(){
        $this->view('add_author');

    }

    function store(){
        // print_r($_POST);
        // print_r($_FILES);
        $author=new Author();
        
        $author->name=$_POST['author_name'];
    //    $imageName=$this->uploadFile($_FILES['image']);

    //     $author->image=$imageName!=null?$imageName:"default.png";
        $author->created_by=1;
    //    $author->is_active=$_POST['is_active'];

        $author->save();
        $this->view('add');

    }
    function edit($params=[]){

        $cat=new Author();
        $result=$cat->getSingleRow($params['id']);
        $this->view('edit_author',$result);
        

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