<?php

$movie_id = $_GET['id'];
$date = $_GET['date'];
$time = $_GET['time'];

require 'functions/movieadmin.php';
$movie = new Movie;
$ticketInfo = $movie->displayTicketInfo($movie_id,$date,$time);
$oneMovie = $movie->displayOneMovie($movie_id);
$total = 0;
$totalsales = 0;
foreach($ticketInfo as $key => $values){
    
    $total = $total + $values['ticket_total'];
    $totalsales = $totalsales + $values['price'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/mediaelementplayer.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/fl-bigmug-line.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
  <style>
    .finish{
      color:rgb(158, 158, 158);
      padding-left:20%;
    }
    .col-3{
      padding:5% 10% 5% 5%;
    }
    .text-black{
        color:black;
        font-weight:bold;
        margin-left:-13%;
    }
    
  </style>
    
    <title>admin</title>
</head>
<body>
<div class="container">
<a href="admin.php"><button class="btn btn-outline-primary my-3">back</button></a>
                <div class="row">
                    
                        <div class="table-title col-6" style="background-color:#f7f7f9">
                            <h3>Display Ticket</h3>
                            <h4 class="mt-3">Title : <?php echo "<span class='text-primary'>".$oneMovie['movie_title']."</span>" ?> </h4> 
                            <h4 class="mt-3">Date : <?php echo "<span class='text-primary'>".$date."</span>" ?></h4> 
                            <h4 class="mt-3">Time : <?php echo "<span class='text-primary'>".$time."</span>"?></h4>
                        </div>
                        <div class="col-6" style="background-color:#f7f7f9">
                            <h3 class="pt-5 mt-3">TICKET TOTAL : <?php echo "<span class='text-danger'>".$total."</span>"?></h3>
                            <h3 class="pb-5">TOTAL SALES : <?php echo "<span class='text-danger'>".$totalsales."</span>"?></h3>
                        </div>

                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>Ticket</th>
                                    <th>Total Price</th>
                                </tr>               
                            </thead>
                            <?php 
                                foreach($ticketInfo as $key => $values){
                                    echo "<tr>";
                                        echo "<td>".$values['user_name']."</td>";
                                        echo "<td>".$values['user_email']."</td>";
                                        echo "<td>".$values['ticket_total']."</td>";
                                        echo "<td>".$values['price']."</td>";
                                    echo "</tr>";
                                }

                            ?>
                        </table>
                </div>
            </div>
    
</body>
</html>