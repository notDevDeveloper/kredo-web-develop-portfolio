<?php

require 'connection.php';

class Movie extends Database {

    

    

    public function addTicket($user_id,$name,$email,$movie_id,$date,$time,$ticket_child,$ticket_student,$ticket_adult,$ticket_total,$price)
    { 
                $sql = "INSERT INTO ticket (user_id,user_name,user_email,movie_id,movie_date,movie_time
                                            , ticket_child,ticket_student,ticket_adult,ticket_total,price)
                        VALUES('$user_id','$name',
                               '$email','$movie_id','$date','$time','$ticket_child','$ticket_student',
                               '$ticket_adult','$ticket_total','$price')"; 
                
                $result = $this->conn->query($sql);
                return "Successfully Uploaded!";
    }

    public function displayCategories(){
        $sql = "SELECT * FROM category";
        $result = $this->conn->query($sql);
        $rows = array();
        while($row = $result->fetch_assoc()){
              $rows[]= $row;
        }
        return $rows;
    }
    // SELECT * FROM dogs
    // INNER JOIN owners 
    // ON dogs.owner_id = owners.id;
    
    public function displayMovies(){
        $sql = "SELECT * FROM movie";
        $result = $this->conn->query($sql);
        $rows = array();
        while($row = $result->fetch_assoc()){
              $rows[]= $row;
        }
        return $rows;
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
    public function displayMovieTime2($date){
        $sql = "SELECT * FROM movie_schedule WHERE movie_plan = '$date'";
        //$sql = "SELECT * FROM movie JOIN category ON movie.movie_category_id = category.category_id　WHERE movie.movie_id = '$id'";
        $result = $this->conn->query($sql);
        $rows = array();
        while($row = $result->fetch_assoc()){
              $rows[]= $row;
        }
        return $rows;
    }
    public function displayMovieTime3($id,$date){
        $sql = "SELECT * FROM movie_schedule WHERE movie_id = '$id' and movie_plan = '$date'";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
        // $rows = array();
        // while($row = $result->fetch_assoc()){
        //       $rows[]= $row;
        // }
        // return $rows;
    }
    public function getCategoryTitle($category_id){
        $sql="SELECT category_title FROM category WHERE category_id = '$category_id' ";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }
    public function buyTicket($ticket_child,$ticket_student,$ticket_adult){
       
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

    public function schedule($id,$plan){
        $sql = "SELECT * FROM movie_schedule WHERE movie_id='$id'and movie_plan='$plan'";
        $result = $this->conn->query($sql);
        $rows = array();
        while($row = $result->fetch_assoc()){
              $rows[]= $row;
        }
        return $rows;
    }

    // public function ranking(){
    //     $sql = "SELECT * FROM ticket WHERE movie_id='$id'and movie_date='$date'and movie_time='$time' ";
    //     $result = $this->conn->query($sql);
    //     $rows = array();
    //     while($row = $result->fetch_assoc()){
    //           $rows[]= $row;
    //     }
    //     return $rows;
    // }

    
    
}




?>