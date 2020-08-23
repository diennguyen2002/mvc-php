<?php
    class controller {
        public function model($model){
            $model = $model."Model";
            require_once "./mvc/models/{$model}.php";
            return new $model;
        }

        public function view($view, $data=[]){
            $view = $view."View";
            require_once "./mvc/views/{$view}.php";
        }
    }


?>