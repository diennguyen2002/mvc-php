<?php
    class db {
        public $con;
        protected $hostname = 'localhost';
        protected $username = 'root';
        protected $password = '';
        protected $dbname = 'mvc';

        public function __construct(){
            $this->con = mysqli_connect($this->hostname, $this->username, $this->password);
            mysqli_select_db($this->con, $this->dbname);
            mysqli_query($this->con, "SET NAMES 'utf8'");
        }
    }
?>