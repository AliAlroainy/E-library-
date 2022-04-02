<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\controllers\Home;
use coding\app\controllers\Cart;
use coding\app\controllers\Categories;
use coding\app\controllers\Details;
use coding\app\controllers\Form;
use coding\app\controllers\About;
use coding\app\controllers\Contact;
use coding\app\controllers\Help;
use coding\app\controllers\Policy;


use coding\app\models\CitiesController;
use coding\app\controllers\UsersController;
use coding\app\controllers\PublisherController;
use coding\app\controllers\AuthorsController;
use coding\app\controllers\BooksController;
use coding\app\controllers\CategoriesController;
use coding\app\controllers\OffersController;
use coding\app\controllers\PublishersController;
use coding\app\system\AppSystem;
use coding\app\system\Router;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

$config=array(
  'servername'=>$_ENV['DB_SERVER_NAME'],
  'dbname'=>$_ENV['DB_NAME'],
  'dbpass'=>$_ENV['DB_PASSWORD'],
  'username'=>$_ENV['DB_USERNAME']

);
$system=new AppSystem($config);

/** web routes  */


/** front routes  */
Router::get('/',[Home::class,'show']);
Router::get('/cart',[Cart::class,'show']);
Router::get('/categories',[Categories::class,'show']);
Router::get('/details',[Details::class,'show']);
Router::get('/about',[About::class,'show']);
Router::get('/payment',[Form::class,'show']);
Router::get('/contact',[Contact::class,'show']);
Router::get('/help',[Help::class,'show']);
Router::get('/policy',[Policy::class,'show']);







/** categories routes  */
Router::get('/Dcategories',[CategoriesController::class,'listAll']);
Router::get('/add_category',[CategoriesController::class,'create']);
Router::get('/edit_category/{id}',[CategoriesController::class,'edit']);
Router::get('/remove_category/{id}/{name}',[CategoriesController::class,'remove']);
Router::post('/save_category',[CategoriesController::class,'store']);
Router::post('/update_category',[CategoriesController::class,'update']);


/** offer routes  */
Router::get('/Doffers',[OffersController::class,'listAll']);
Router::get('/add_offer',[OffersController::class,'create']);
Router::get('/edit_offer/{id}',[OffersController::class,'edit']);
Router::get('/remove_offer/{id}/{name}',[OffersController::class,'remove']);
Router::post('/save_offer',[OffersController::class,'store']);
Router::post('/update_offer',[OffersController::class,'update']);

/** book routes  */
Router::get('/Dbook',[BooksController::class,'listAll']);
Router::get('/add_book',[BooksController::class,'create']);
Router::get('/edit_book/{id}',[BooksController::class,'edit']);
Router::get('/remove_book/{id}/{name}',[BooksController::class,'remove']);
Router::post('/save_book',[BooksController::class,'store']);
Router::post('/update_book',[BooksController::class,'update']);


/** authors routes  */
Router::get('/Dauthor',[AuthorsController::class,'listAll']);
Router::get('/add_author',[AuthorsController::class,'create']);
Router::get('/edit_author/{id}',[AuthorsController::class,'edit']);
Router::get('/remove_author/{id}/{name}',[AuthorsController::class,'remove']);
Router::post('/save_author',[AuthorsController::class,'store']);
Router::post('/update_author',[AuthorsController::class,'update']);

/** publisher routes  */
Router::get('/Dpublisher',[PublisherController::class,'listAll']);
Router::get('/add_publisher',[PublisherController::class,'create']);
Router::get('/edit_publisher/{id}',[PublisherController::class,'edit']);
Router::get('/remove_publisher/{id}/{name}',[PublisherController::class,'remove']);
Router::post('/save_publisher',[PublisherController::class,'store']);
Router::post('/update_publisher',[PublisherController::class,'update']);

/** Users routes  */
Router::get('/Duser',[UsersController::class,'listAll']);
Router::get('/add_user',[UsersController::class,'create']);
Router::get('/edit_user/{id}',[UsersController::class,'edit']);
Router::get('/remove_user/{id}/{name}',[UsersController::class,'remove']);
Router::post('/save_user',[UsersController::class,'store']);
Router::post('/update_user',[UsersController::class,'update']);


/** cities routes  */
Router::get('/Dcities',[CitiesController::class,'listAll']);
Router::get('/add_cities',[CitiesController::class,'create']);
Router::get('/edit_cities/{id}',[CitiesController::class,'edit']);
Router::get('/remove_cities/{id}/{name}',[CitiesController::class,'remove']);
Router::post('/save_cities',[CitiesController::class,'store']);
Router::post('/update_cities',[CitiesController::class,'update']);

/** end of web routes */



$system->start();

