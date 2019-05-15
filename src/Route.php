<?php
 
  class Route {

    private $listetUrl = [];
    private $listeFonctions = [];

    public function add(string $url, $fonction): void {
        $theUrl = trim($url, '/\^$');
        array_push($this->listeUrl, $theUrl);
        array_push($this->listeFonctions, $fonction);
    }

    public function run(): void {
        $url = isset($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:'/';
        $url = trim($url, '/\^$');

        foreach ($this->listeUrl as $key => $val) {
            if (preg_match("#^$val$#", $url)) {
                call_user_func_array($this->listeFonctions[$key], []);
            }
        }
    }

  }