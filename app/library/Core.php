<?php
    // URL Map
    //Controller->Method->Parameters
    //Productos->Update->M_1_PI

    class Core{
        protected $currentController ="pages";
        protected $currentMethod = "index.php";
        protected $parameters = [];

        public function __construct(){
            $url = $this->getUrl();
        }

        public function getUrl(){
            echo $_GET['url'];
        }
    }
?>