<?php 

namespace coding\app\controllers;

use coding\app\models\Book;
use coding\app\models\Category;

class OffersController extends Controller{
 
//     public function create(){
//         $books=new Book();
//         $categories=new Category();
//         $allCategoires=$categories->getAll();
//         $allbooks=$books->getAll();
//         $viewConent=array('books'=>$allbooks,'categories'=>$allCategoires);
//         $this->view('add_offer',$viewConent);
//     }

//     public function store(){
//         if(isset($_POST['selected_books'])){
//             $books=implode(",",$_POST['selected_boos']);

//         }
//         print_r($_POST);
  
//         // print_r($_POST);
//         // print_r($_FILES);
//         $category=new Category();
        
//         $category->name=$_POST['category_name'];
//         $imageName=$this->uploadFile($_FILES['image']);

//         $category->image=$imageName!=null?$imageName:"default.png";
//         $category->created_by=1;
//         $category->is_active=$_POST['is_active'];

//         $category->save();
//         $this->view('add');

//     }
//     function edit($params=[]){

//         $cat=new Category();
//         $result=$cat->getSingleRow($params['id']);
//         $this->view('edit_category',$result);
        

//     }
//     function update(){

//     }
//     public function remove($params=[]){
//         echo "remove function";

//     }


//     public static function uploadFile(array $imageFile): string
//     {
//         // check images direction
//         if (!is_dir(__DIR__ . '/../../public/images')) {
//             mkdir(__DIR__ . '/../../public/images');
//         }

//         if ($imageFile && $imageFile['tmp_name']) {
//             $image = explode('.', $imageFile['name']);
//             $imageExtension = end($image);

//             $imageName = uniqid(). "." . $imageExtension;
//             $imagePath =  __DIR__ . '/../../public/images/' . $imageName;

//             move_uploaded_file($imageFile['tmp_name'], $imagePath);

//             return $imageName;
//         }

//         return null;
//     }

    
}
?>