<?php

require 'connection.php';

class Movie extends Database {

    public function displayCategories(){
        $sql = "SELECT * FROM category";
        $result = $this->conn->query($sql);
        $rows = array();
        while($row = $result->fetch_assoc()){
              $rows[]= $row;
        }
        return $rows;
    }
    public function displayMovies(){
        $sql = "SELECT * FROM movie";
        $result = $this->conn->query($sql);
        $rows = array();
        while($row = $result->fetch_assoc()){
              $rows[]= $row;
        }
        return $rows;
    }
    public function displayTicketInfo($id,$date,$time){
        $sql = "SELECT * FROM ticket WHERE movie_id='$id'and movie_date='$date'and movie_time='$time' ";
        $result = $this->conn->query($sql);
        $rows = array();
        while($row = $result->fetch_assoc()){
              $rows[]= $row;
        }
        return $rows;
    }

    public function addMovie($movie_image_filename,$movie_image_tmpname,$directory,$movie_title,$movie_category,
                               $movie_length,$movie_screen,$movie_body)
    { 
        $extension = pathinfo($movie_image_filename,PATHINFO_EXTENSION);
        $array_extensions = array('png','jpg','ipeg','gif','JPEG','PNG','GIF');
        if(in_array($extension,$array_extensions)){
            $new_directory = $directory.$movie_image_filename;
            if(move_uploaded_file($movie_image_tmpname,$new_directory)){
                $sql = "INSERT INTO movie (movie_title,movie_category_id,movie_length,movie_screen,
                                            movie_image,movie_body)
                        VALUES('$movie_title','$movie_category',
                               '$movie_length','$movie_screen','$new_directory','$movie_body')"; 
                
                $result = $this->conn->query($sql);
                return "Successfully Uploaded!";
            }else{
                return $result = "Error in uploading file!";
            }
        }else{
            return $result = "Error! Unsupported file extension!";
        }
    }
    public function addSchedule($movie_title,$movie_plan,
                                $movie_start1,$movie_finish1,$movie_start2,$movie_finish2,$movie_start3,$movie_finish3,
                                $movie_start4,$movie_finish4)
    { 
                $sql = "INSERT INTO movie_schedule (movie_id,movie_plan,movie_start1,movie_finish1,movie_start2,movie_finish2
                                            , movie_start3, movie_finish3,movie_start4,movie_finish4)
                        VALUES('$movie_title','$movie_plan',
                               '$movie_start1','$movie_finish1','$movie_start2','$movie_finish2','$movie_start3','$movie_finish3',
                               '$movie_start4','$movie_finish4')"; 
                
                $result = $this->conn->query($sql);
                return "Successfully Uploaded!";
    }
    public function displayOneMovie($id){
        $sql = "SELECT * FROM movie WHERE movie_id = '$id'";
        //$sql = "SELECT * FROM movie JOIN category ON movie.movie_category_id = category.category_id　WHERE movie.movie_id = '$id'";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }
    public function displayMovieTime($id){
        $sql = "SELECT * FROM movie_schedule WHERE movie_id = '$id'";
        //$sql = "SELECT * FROM movie JOIN category ON movie.movie_category_id = category.category_id　WHERE movie.movie_id = '$id'";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }
}




?>