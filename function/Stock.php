<?php 

require 'Connection.php';

    class Stock extends Database {

        public function addAppointment($appointment_student_name, $appointment_student_email, $appointment_date, $appointment_teacher, $appointment_timezone, $appointment_message){
            $sql = "INSERT INTO appointment(appointment_student_name, appointment_student_email, appointment_date, appointment_teacher, appointment_timezone, appointment_message) VALUES ('$appointment_student_name', '$appointment_student_email', '$appointment_date', '$appointment_teacher', '$appointment_timezone', '$appointment_message')" ;
        $result = $this->conn->query($sql);
        return $result;
        }
        public function addContact($contact_name, $contact_email, $contact_subject, $contact_message){
            $sql = "INSERT INTO contact(contact_name, contact_email, contact_subject, contact_message) VALUES ('$contact_name', '$contact_email', '$contact_subject', '$contact_message')" ;
        $result = $this->conn->query($sql);
        return $result;
        }

        // public function addRequest();

        public function listTeacher(){
            $sql = "SELECT teacher_id, teacher_name FROM teacher ";
            $rows = array();
            $result = $this->conn->query($sql);
    
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
        public function login($email, $password){
            $sql = "SELECT * FROM user
                    WHERE user_email = '$email' AND user_pass = '$password'";
        
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();
            return $row;
        }
        // public function adminLogin($email, $password){
        //     $sql = "SELECT admin_id, admin_name, admin_email FROM admin
        //             WHERE admin_email = '$email' AND admin_pass = '$password'";
        
        //     $result = $this->conn->query($sql);
        //     $row = $result->fetch_assoc();
        //     return $row;
        // }

        public function addCourse($course_teacher, $course_date, $course_timezone){

            $sql = "INSERT INTO course(course_teacher_id, course_date, course_timezone, reservation_status)
            VALUES ('$course_teacher', '$course_date', '$course_timezone', 'available')" ;
            $result = $this->conn->query($sql);
            return $result;

        }
        public function displayCourses(){
            $sql = "SELECT * FROM course";
            $result = $this->conn->query($sql);
            $rows = array(); //initialize the array rows
        
            while($row = $result->fetch_assoc()){
                $rows[] = $row; //  transfer every single record from fetch_assoc to the array rows
            }
            return $rows;
        }
        
    }




?>