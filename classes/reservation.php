<?php

        class Reservation extends Database{


        //reservation

        public function addReservation($reservation_check_in,$reservation_check_out,$reservation_adult,$reservation_children,$reservation_room_id){

            $sql = "INSERT INTO `Reservation`(`reservation_check_in`, `reservation_check_out`, `reservation_adult`, `reservation_children`, `reservation_room_id`)
                    VALUES ('$reservation_check_in','$reservation_check_out','$reservation_adult','$reservation_children','$reservation_room_id')";
                    $result = $this->conn->query($sql);
                    return "Succeessfully Uploaded!";

        }


        public function displayReservation(){
            $sql = "SELECT * FROM `Reservation`";
            $result = $this->conn->query($sql);
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }    
            return $rows;
        }

        public function displayOneReservation($id){
            $sql = "SELECT * FROM Reservation WHERE reservation_id = '$id'";
            $result = $this->conn->query($sql);
            $Reservations = $result->fetch_assoc();
            return $Reservations;
        }    




        }



?>