<?php
    require_once "models/RegistrarPregunta.php";
    class RegistrarPreguntaControllers{
        public function __construct(){}
        public function index(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                require_once "views/Business/header.view.php";
                require_once "views/Business/index.view.php";
                require_once "views/Business/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $RegistrarPregunta = new RegistrarPregunta(
                    null,
                    $_POST['email'],
                    $_POST['pregunta']
                );
                $RegistrarPregunta->registrarPregunta();
                header("Location: ?c=RegistrarPreguntaControllers");
            }            
        }
    }
