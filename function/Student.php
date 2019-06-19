<?php 

require 'Connection.php';

    class Student extends Database {

        public function addStudent($student_name, $student_email, $student_pass, $student_confirmpass){

                    $sql = "INSERT INTO user(user_name,user_email, user_pass, user_confirmpass, user_type )
                    VALUES ('$student_name', '$student_email', '$student_pass', '$student_confirmpass', 'Student')" ;
                    $result = $this->conn->query($sql);
                    return $result;
            
            }
        
    }
?>