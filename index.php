<?php
    // require autoload file
    require_once("vendor/autoload.php");

    // instantiate Fat Free Framework (f3) class
    $f3 = Base::instance();

    // define default route for project
    $f3->route('GET /', function() {
        echo "<h1>Hello!</h1>";
    });

    $f3->run();
?>