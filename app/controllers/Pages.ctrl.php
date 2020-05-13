<?php
    
    class Pages extends Controller{
        public function __construct(){
           // echo 'Controlador paginas cargar';
        }

        public function Index(){
             $this->View("pages/index");
        }
    }
?>