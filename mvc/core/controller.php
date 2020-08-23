<?php
    class controller {
        public function model($model){
            require_once "./mvc/models/{$model}.php";
            return new $model;
        }

        public function view($view){
            require_once "./mvc/views/{$view}.php";
            return new $view;
        }
    }


?>