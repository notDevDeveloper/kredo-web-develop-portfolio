<?php 

require 'Connection.php';

    class Admin extends Database {

        public function addAdmin($admin_name, $admin_email, $admin_pass, $admin_confirmpass){

            $sql = "INSERT INTO user(user_name,user_email, user_pass, user_confirmpass, user_type )
            VALUES ('$admin_name', '$admin_email', '$admin_pass', '$admin_confirmpass', 'Admin')" ;
            $result = $this->conn->query($sql);
            return $result;
    
        }
        public function displayContact(){
            $sql = "SELECT * FROM contact";
            $result = $this->conn->query($sql);
            $rows = array(); //initialize the array rows
        
            while($row = $result->fetch_assoc()){
                $rows[] = $row; //  transfer every single record from fetch_assoc to the array rows
            }
            return $rows;
        }
        public function displayUser(){
            $sql = "SELECT * FROM user";
            $result = $this->conn->query($sql);
            $rows = array(); //initialize the array rows
        
            while($row = $result->fetch_assoc()){
                $rows[] = $row; //  transfer every single record from fetch_assoc to the array rows
            }
            return $rows;
        }
        public function displayteacher(){
            $sql = "SELECT * FROM teacher";
            $result = $this->conn->query($sql);
            $rows = array(); //initialize the array rows
        
            while($row = $result->fetch_assoc()){
                $rows[] = $row; //  transfer every single record from fetch_assoc to the array rows
            }
            return $rows;
        }
        
    }
?>