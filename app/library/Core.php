<?php
    // URL Map
    //Controller->Method->Parameters
    //Productos->Update->M_1_PI

    class Core{
        protected $currentController ="Pages";
        protected $currentMethod = "index";
        protected $parameters = [];

        public function __construct(){
            $url = $this->getUrl();

            //Controller Exists
            if(file_exists('../app/controller/'.ucwords($url[0].'.ctrl.php')))
            {
                $this->currentController = ucwords($url[0]);
                
                unset($url[0]);
            }

            require_once '../app/controller/'.$this->currentController.'.ctrl.php';
            $this->currentController = new $this->currentController;
        
            //Method Validate
            if(isset($url[1])){
                if(method_exists($this->currentController,$url[1])){
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }

           $this->parameters = $url ? array_values($url): [];

           call_user_func_array([$this->currentController, $this->currentMethod], $this->parameters);

        }

        public function getUrl(){
           if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                //URL Validate
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/',$url);

                return $url;
            }
        }
    }
?>