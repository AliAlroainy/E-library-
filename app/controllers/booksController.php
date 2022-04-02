<?php

namespace coding\app\controllers;

use coding\app\models\Book;

class BooksController extends Controller{

    function listAll($parameters=null){

        $parameters['status'];
        $Books=new Book();
        $allBooks=$Books->getAll();
        //print_r($allBooks);

        $this->view('list_books',$allBooks);

    }
    function create(){
        $this->view('add_book');

    }

    function store(){
        // print_r($_POST);
        // print_r($_FILES);
        $book=new Book();
        
        $book->name=$_POST['book_name'];
        $imageName=$this->uploadFile($_FILES['image']);

        $book->image=$imageName!=null?$imageName:"default.png";
        $book->created_by=1;
        $book->is_active=$_POST['is_active'];

        $book->save();
        $this->view('add');

    }
    function edit($params=[]){

        $cat=new Book();
        $result=$cat->getSingleRow($params['id']);
        $this->view('edit_book',$result);
        

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