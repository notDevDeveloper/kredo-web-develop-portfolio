<?php 

require 'Connection.php';

    class Teacher extends Database {

        public function addTeacher($teacher_image_filename,$teacher_image_tmpname, $directory, $teacher_name, $teacher_email, $teacher_cefr, $teacher_specialty){

            $extension = pathinfo($teacher_image_filename, PATHINFO_EXTENSION);
            $array_extensions = array('png', 'jpg', 'jpeg', 'gif', 'JPEG', 'JPG', 'PNG', 'GIF');
        
            if(in_array($extension, $array_extensions)){
                $new_directory = $directory.$teacher_image_filename;
                if(move_uploaded_file($teacher_image_tmpname, $new_directory)){
                    $new_dir = "images/".$teacher_image_filename;
                    $sql = "INSERT INTO teacher(teacher_name, teacher_email, teacher_cefr, teacher_specialty, teacher_image)
                    VALUES ('$teacher_name', '$teacher_email', '$teacher_cefr', '$teacher_specialty', '$new_dir')" ;
                    $result = $this->conn->query($sql);
                    return $result;
                }
            }
        
        
            // $sql = "INSERT INTO users(users_name, users_email, users_pass, confirm_pass)
            // VALUES ('$user_name', '$user_email', '$user_pass', '$confirm_pass')" ;
            // $conn = connection();
            // $result = $conn->query($sql);
            // return $result;
        }

        public function displayTeachers(){
            $sql = "SELECT * FROM teacher";
            $result = $this->conn->query($sql);
            $rows = array();
        
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
        public function displayOneTeacher($id){
            $sql = "SELECT * FROM teacher WHERE teacher_id = '$id'";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();
            return $row;
        }
        public function addComment($single_teacher, $login_student, $comment_message){
            $sql = "INSERT INTO comment(comment_teacher_id, comment_student_id, comment_text) VALUES ('$single_teacher', '$login_student', '$comment_message')" ;
            $result = $this->conn->query($sql);
            return $result;
            }
        public function displayTeacherComment($id){
            $sql = "SELECT comment.comment_id, user.user_name, comment.comment_text FROM comment JOIN user ON comment.comment_student_id = user.user_id WHERE comment.comment_teacher_id = '$id'";
            $result = $this->conn->query($sql);
            $rows = array();
    
            while($row =$result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
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
        public function displayTeacherCourse($id){
            $sql = "SELECT course.course_id, course.course_date, course.course_timezone, course.reservation_status FROM course JOIN teacher ON course.course_teacher_id = teacher.teacher_id WHERE course.course_teacher_id = '$id'";
            $result = $this->conn->query($sql);
            $rows = array();
    
            while($row =$result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
        public function requestCourse($id){

            $sql = "UPDATE course SET reservation_status = 'requested' WHERE course_id = '$id'  ";
            $result = $this->conn->query($sql);
            return $result;
        }
        public function availableCourse($id){

            $sql = "UPDATE course SET reservation_status = 'available' WHERE course_id = '$id'  ";
            $result = $this->conn->query($sql);
            return $result;
        }
        public function displayOneTeacherCourse($id){
            $sql = "SELECT * FROM course JOIN teacher ON course.course_teacher_id = teacher.teacher_id WHERE course.course_id = '$id'";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();
            return $row;
        }
        public function requestWho($id, $login_student){
            $sql = "INSERT INTO course_request(request_course_id, request_student_id) VALUES ('$id', '$login_student')" ;
            $result = $this->conn->query($sql);
            return $result;
            }
        public function cancelRequest($id){

            $sql = "DELETE FROM course_request WHERE request_course_id = '$id' ";
            $result = $this->conn->query($sql);
        }
        public function displayReservationStatus($login_student, $course_id){
            $sql = "SELECT COUNT(*) AS count_course FROM course_request WHERE request_student_id = '$login_student' AND request_course_id = '$course_id'" ;
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();
            return $row;
        }
        public function deleteTeacher($id){

            $sql = "DELETE FROM teacher WHERE teacher_id = '$id' ";
            $result = $this->conn->query($sql);
        }
    }




?>