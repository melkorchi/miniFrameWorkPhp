<?php

    //require_once "./src/autoload.php";
    require_once "./src/Autoloader.php";
    
    $config = require "./src/config.php";

    if ($config["env"] == 'dev') {
        ini_set('dsiplay_errors', 1);
        ini_set('dsiplay_startup_errors', 1);
        error_reporting(E_ALL);
    } 

    $fix = new InstanceFixtures(22);

    $app = new Route();
    $app->add('/test', function() {
        echo 'ok';
    });

    $app->add('/show', function() {
        echo "<pre>";
            print_r($fix->getArrayIntervenant());
        echo "</pre>";
    });

    $app->run();
    