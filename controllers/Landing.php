<?php
    class Landing {
        public function __construct(){}
        public function index(){  
           require_once "views/Business/header.view.php";
           require_once "views/Business/index.view.php";
           require_once "views/Business/footer.view.php";         
        }
    }