<?php
    class App {
        //http://learn_mvc.test/home/sayhello/1/2/3
        protected $controller="home";
        protected $action="sayhello";
        protected $param=[]; // 1,2,3

        function __construct(){
            $arr = $this->urlProcess();

            // xu ly controller
            if(file_exists("./mvc/controllers/".$arr[0].".php")){
                $this->controller = $arr[0];
                unset($arr[0]);
            }
            require_once "./mvc/controllers/".$this->controller.".php";
            
            // xu ly action
            if(isset($arr[1])){
                if(method_exists($this->controller, $arr[1])){
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }

            // xu ly action
            $this->param = $arr ? array_values($arr) : [];

            // khoi tao controller, goi action, truyen param
            $c = new $this->controller;
            call_user_func_array([$c, $this->action], $this->param);
        }

        function urlProcess(){
           //home/sayhello/1/2/3 
           if(isset($_GET['url'])){
               return explode("/", filter_var(trim($_GET['url'], "/")));
           }
        }
    }
?>