<?php

$id = $_GET['movie_id'];
$date = $_GET['date'];

require 'functions/movieadmin.php';
$movie = new Movie;
$oneMovie = $movie->displayOneMovie($id);

$movieTime = $movie->displayMovieTime($id);





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
    <div class="container bg-dark p-5" >
        <a href="admin.php"><button class="btn btn-outline-primary my-3">back</button></a>
        <div class="row">
        <div class="col-lg-8">
        <h2 class="text-white py-3">Choose the date</h2>

            <div class="row mt-3 ml-3">
            <?php
            echo "<div class='col-3 bg-white'><a href='displayticket.php?id=".$oneMovie['movie_id']."&date=".$date."&time=".$movieTime['movie_start1']." '>";
            echo "<h3 class='text-black'>".$movieTime['movie_start1']."</h5>"; 
            echo "<h6 class='finish'> ~".$movieTime['movie_finish1']."</h6>";
         echo "</a></div>";
         if($movieTime['movie_start2']== '00:00:00'){

         }else{
           echo "<div class='col-3 bg-white m-2'><a href='displayticket.php?id=".$oneMovie['movie_id']."&date=".$date."&time=".$movieTime['movie_start2']."'>";
            echo "<h3 class='text-black'>".$movieTime['movie_start2']."</h5>"; 
            echo "<h6 class='finish'>".$movieTime['movie_finish2']."</h5>";
           echo "</a></div>";
         }
         if($movieTime['movie_start3']=='00:00:00'){

         }else{
           echo "<div class='col-3 bg-white m-2'><a href='displayticket.php?id=".$oneMovie['movie_id']."&date=".$date."&time=".$movieTime['movie_start3']."'>";
            echo "<h3 class='text-black'>".$movieTime['movie_start3']."</h5>"; 
            echo "<h6 class='finish'>".$movieTime['movie_finish3']."</h5>";
           echo "</a></div>";
         }
         if($movieTime['movie_start4']=='00:00:00'){

         }else{
           echo "<div class='col-3 bg-white m-2'><a href='displayticket.php?id=".$oneMovie['movie_id']."&date=".$date."&time=".$movieTime['movie_start4']."'>";
            echo "<h3 class='text-black'>".$movieTime['movie_start4']."</h5>"; 
            echo "<h6 class='finish'>".$movieTime['movie_finish4']."</h5>";
           echo "</a></div>";
         }

            ?>
          </div>  
            </div>  
    </div>
</body>
</html>