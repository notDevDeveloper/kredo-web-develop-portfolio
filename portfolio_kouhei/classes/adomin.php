<?php

require 'Connection.php';

class Staff extends Database{


    // staff login
    public function login($staff_name,$staff_password){
        $sql = "SELECT staff_id, staff_name, staff_password FROM Staff
                WHERE staff_name = '$staff_name'AND staff_password = '$staff_password'";
        
        
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }


    
}






?>