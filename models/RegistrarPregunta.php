<?php
    class RegistrarPregunta{
        private $dbh;
        protected $id;
        protected $Email;
        protected $Pregunta;
        public function __construct(){
            try {
                $this->dbh = DataBase::connection();
                $a = func_get_args();
                $i = func_num_args();
                if (method_exists($this, $f = '__construct' . $i)) {
                    call_user_func_array(array($this, $f), $a);
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        public function __construct3($id, $Email, $Pregunta){
            $this->id = $id;
            $this->Email = $Email;
            $this->Pregunta = $Pregunta;
        }
        public function setEmail($Email){
            $this->Email = $Email;
        } 
        public function getEmail(){
            return $this->Email;
        } 
        public function setPregunta($Pregunta){
            $this->Pregunta = $Pregunta;
        } 
        public function getPregunta(){
            return $this->Pregunta;
        } 
        public function setid($id){
            $this->id = $id;
        } 
        public function getid(){
            return $this->id;
        } 
        public function registrarPregunta() {
            try {
                $sql = 'INSERT INTO pregunta VALUES (
                            :id,
                            :email,
                            :pregunta
                        )';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('id', $this->getid());
                $stmt->bindValue('email', $this->getEmail());
                $stmt->bindValue('pregunta', $this->getPregunta());            
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
        
