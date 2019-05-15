<?php

    $folders = ["controller", "model", "service"];

    foreach ($folders as $nameFolder) {
        //if ($dossier = opendir(__DIR__.'/'.$nameFolder)) {
        if ($dossier = scandir(__DIR__.'/'.$nameFolder)) {
            //echo __DIR__.'/'.$nameFolder;
            echo "<pre>";
            var_dump($dossier);
            echo "</pre>";
            for ($i=0; $i<count($dossier); $i++) {
                if ($dossier[$i][0] != '.') {
                    $class_name = $dossier[$i][0];
                    spl_autoload_register(function($class_name){
                        include $class_name . '.php';
                    });
                }
            }
        }
    }