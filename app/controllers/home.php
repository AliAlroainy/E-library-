<?php
require_once 'controller.php';
class Home extends Controller{

    function __construct()
    {
        // echo "<h1>inside home controller constuctor</h1>";
       // require_once "app/views/index.php";

    }

    function index(){

        require_once "app/views/index.php";

    }

}
?>