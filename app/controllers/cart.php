<?php

class Cart{
    function __construct()
    {
        echo "<h1>inside cart controller constuctor</h1>";
        require_once "app/views/cart.php";
    }

}
?>