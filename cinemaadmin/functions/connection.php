<?php

class Database{
    //member variables
    private $servername = "localhost";
    private $username ="root";
    private $password = "";
    private $database = "cinema";

    public $conn;//this variable here will hold the connection

    //constructor function
    //this function will construct the connection from
    //PHP to database and vice versa

    public function __construct(){
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->database);
        if($this->conn->connect_error){
            die("Connection Error: ".$this->conn->connect_error);
        }
        return $this->conn;
    }


}


?>