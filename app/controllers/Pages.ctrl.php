<?php
    
    class Pages extends Controller{
        public function __construct(){
           // echo 'Controlador paginas cargar';
        }

        public function Index(){
            $datos = ['titulo' => 'Parametros'];
             $this->View("pages/index", $datos);
        }
    }
?>