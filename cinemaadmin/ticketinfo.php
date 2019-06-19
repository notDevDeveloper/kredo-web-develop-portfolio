<?php
require 'functions/movieadmin.php';
$movie = new Movie;
$movies = $movie->displayMovies();

if(isset($_POST['submit'])){
    $movie_id = $_POST['movie'];
    $date = $_POST['date'];
    // $time = $_POST['time'];

    header('Location:tickettime.php?movie_id='.$movie_id.'&date='.$date);

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
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
      padding-left:30%;
    }
    .col-3{
      padding:5% 10% 5% 5%;
    }
  </style>
    
    <title>admin</title>
</head>
<body>
    <div class="container">
        <a href="admin.php"><button class="btn btn-outline-primary my-3">back</button></a>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Select Movie</label>
                <select name="movie" id="" class="form-control">
                        <?php
                            foreach($movies as $key => $values){
                                echo "<option name=".$values['movie_id']." value=".$values['movie_id'].">".$values['movie_title']."</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Select Date</label>
                <input type="date" name="date" id="" value="<?php echo date("Y/m/d") ;?>">
            </div>
            <input type="submit" class="form-control w-25 btn btn-outline-primary" name="submit" value="Next">
        </form>
    </div>
</body>
</html>