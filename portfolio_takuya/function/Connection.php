<?php 
// the connection class for the database


    class Database{
        // menber variables
        private $servername = "localhost";
        private $username = "root";
        private $password = ""; // mamp users the password is 'root';
        private $database = "portfolio";

        public $conn;  // this variable here will hold the connection

        // Constructor function
        // this function will construct the connection from
        // PHP to Database and vice versa

        public function __construct(){
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
            if($this->conn->connect_error){
                die("Connection Error: ".$this->conn->connect_error);
            }
            return $this->conn;
        }

    }


?>