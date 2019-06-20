<?php 

require 'Connection.php';

    class Student extends Database {

        public function addStudent($student_name, $student_email, $student_pass, $student_confirmpass){

                    $sql = "INSERT INTO user(user_name,user_email, user_pass, user_confirmpass, user_type )
                    VALUES ('$student_name', '$student_email', '$student_pass', '$student_confirmpass', 'Student')" ;
                    $result = $this->conn->query($sql);
                    return $result;
            }
            public function displayOneStudent($id){
                $sql = "SELECT * FROM user WHERE user_id = '$id' ";
                $result = $this->conn->query($sql);
                $row = $result->fetch_assoc();
                return $row;
            }
            public function deleteStudent($id){

                $sql = "DELETE FROM user WHERE user_id = '$id' ";
                $result = $this->conn->query($sql);
            }
        
    }
?>