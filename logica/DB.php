<?php
/*
    class DB{
        private $host;
        private $db;
        private $user;
        private $password;
        private $charset;

        public function __construct(){
            $this->host = 'localhost';
            $this->db = 'libreria';
            $this->user = 'root';
            $this->password = '';
            $this->charset = 'utf8mb4';
        }

        public function connect(){
            try {
                $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;

                $options =[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                           PDO::ATTR_EMULATE_PREPARES => false];

                $pdo = new PDO($connection, $this->user, $this->password, $options);

                return $pdo; 

            } catch (PDOException $e) {
                print_r("Error connection: " . $e->getMessage());
            }
        }
    }
*/
    
    class BD{
        private $host;
        private $db;
        private $user;
        private $password;

        public function __construct(){

            $this->host = "localhost";
            $this->db = "libreria";
            $this->user = "root";
            $this->password = "";
        }

        public function connection(){
            $enlace = mysqli_connect($this->host, $this->user, $this->password, $this->db);
            if(!$enlace)
                return die('Error en la conexión: '.mysqli_connect_errno());
            else
                return $enlace;
        }
    }

?>