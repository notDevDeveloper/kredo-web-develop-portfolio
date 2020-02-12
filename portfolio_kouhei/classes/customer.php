<?php

    require 'Connection.php';

    class Customer extends Database{


        // cutomer-login
        public function login($customer_name,$customer_password){
            $sql = "SELECT customer_id, customer_name, customer_password FROM Customer
                    WHERE customer_name = '$customer_name'AND customer_password = '$customer_password'";
            
            
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();
            return $row;
        }



        
        //customer 

        public function addCustomer($customer_name,$customer_phone,$customer_mail,$customer_password,$customer_address,$customer_gender,$customer_age){

            $sql = "INSERT INTO `Customer`(`customer_name`, `customer_phone`, `customer_mail`, `customer_password`, `customer_address`,`customer_gender`, `customer_age`)
                    VALUES ('$customer_name','$customer_phone','$customer_mail','$customer_password','$customer_address','$customer_gender','$customer_age')";
            $result = $this->conn->query($sql);
            $last_id = mysqli_insert_id($this->conn);
            return $last_id;

        }

        public function displayCustomer(){
            $sql = "SELECT * FROM `Customer`";
            $result = $this->conn->query($sql);
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }    
            return $rows;
        }


        public function displayOneCustomer($id){
            $sql = "SELECT * FROM Customer WHERE customer_id = '$id'";
            $result = $this->conn->query($sql);
            $customers = $result->fetch_assoc();
            return $customers;
            
        }


        public function updateCustomer($customer_name,$customer_phone,$customer_mail,$customer_password,$customer_address,$customer_gender,$customer_age,$customer_id){
            $sql = "UPDATE Customer SET customer_name = '$customer_name', customer_phone = '$customer_phone', customer_mail = '$customer_mail', customer_password = '$customer_password', customer_address = '$customer_address', customer_gender = '$customer_gender', customer_age = '$customer_age' WHERE customer_id = '$customer_id'";
            $result = $this->conn->query($sql);
            return $result;
        }


        public function deleteCustomer($id){
            $sql = "DELETE FROM Customer WHERE customer_id = '$id'"; 
            $result = $this->conn->query($sql);
            return $result;

        }



        




    }



    class Reservation extends Database{


        //reservation
        
        public function addReservation($reservation_customer_id,$reservation_check_in,$reservation_check_out,$reservation_adult,$reservation_children,$reservation_room_name){

            $sql = "INSERT INTO `Reservation`(`reservation_customer_id`,`reservation_check_in`, `reservation_check_out`, `reservation_adult`, `reservation_children`, `reservation_room_name`)
                    VALUES ('$reservation_customer_id','$reservation_check_in','$reservation_check_out','$reservation_adult','$reservation_children','$reservation_room_name')";
                    $result = $this->conn->query($sql);
                    $last_id = mysqli_insert_id($this->conn);
                    return $last_id;

        }


        public function displayReservation(){
            $sql = "SELECT * FROM Reservation JOIN Customer ON Reservation.reservation_customer_id = Customer.customer_id JOIN Room ON Room.room_name = Reservation.reservation_room_name";
            $result = $this->conn->query($sql);
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }    
            return $rows;
        }

        public function displayReservations($id){
            $sql = "SELECT * FROM Reservation JOIN Room ON Room.room_name = Reservation.reservation_room_name WHERE reservation_customer_id = '$id'";
            $result = $this->conn->query($sql);
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }    
            return $rows;
        }

        public function displayOneReservation($id){
            $sql = "SELECT * FROM Reservation JOIN Customer ON Reservation.reservation_customer_id = Customer.customer_id JOIN Room ON Room.room_name = Reservation.reservation_room_name WHERE reservation_id = '$id'";
            $result = $this->conn->query($sql);
            $Reservations = $result->fetch_assoc();
            return $Reservations;
        }
        
        
        public function updateReservation($reservation_check_in,$reservation_check_out,$reservation_adult,$reservation_children,$reservation_room_name,$reservation_id){
            $sql = "UPDATE Reservation SET reservation_check_in = '$reservation_check_in', reservation_check_out = '$reservation_check_out', reservation_adult = '$reservation_adult', reservation_children = '$reservation_children', reservation_room_name = '$reservation_room_name' WHERE reservation_id = '$reservation_id'";
            $result = $this->conn->query($sql);
            return $result;
        }


        public function deleteReservation($id){
            $sql = "DELETE FROM Reservation WHERE Reservation_id = '$id'"; 
            $result = $this->conn->query($sql);
            return $result;

        }


        // hotelの空席状況　既に予約がある場合は予約不可能
        public function checkAvailability($check_in,$check_out,$room){
            $sql = "SELECT COUNT(*) as countrooms FROM Reservation WHERE reservation_check_in = '$check_in'  AND reservation_check_out = '$check_out' AND reservation_room_name = '$room'";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();
            return $row;
        }

        // 予約の3日以内だと変更・キャンセル不可能
        public function checkCansell($datatoday,$reservation_check_in){
            $t1 = strtotime($datatoday);  // 現在の時間
            $t2 = strtotime($reservation_check_in);
            $seconddiff = abs($t2 - $t1);
            $daydiff = $seconddiff / (60 * 60 * 24);
            return $daydiff;
        }


        // 過去は予約不可能
        public function checkPastDate($date_today,$reservation_check_in){
            $t1 = strtotime($date_today);
            $t2 = strtotime($reservation_check_in);
            $seconddiff = $t2 - $t1;
            $daydiff = $seconddiff /(60 * 60 * 24);
            return $daydiff;
        }



    }




    class Room extends Database{



        public function addPrice($room_name,$room_price){
            $sql = "SELECT * FROM Reservation JOIN Customer ON Reservation_customer_id = Customer.customer_id JOIN Room ON Reservation.Room_id = Room.room_id";
            $result = $this->conn->query($sql);
            return $result;
        }
    



    }








?>