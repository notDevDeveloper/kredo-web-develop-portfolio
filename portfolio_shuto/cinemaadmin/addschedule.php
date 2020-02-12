<?php

 session_start();

//  if(empty($_SESSION)){
//      header('Location:login.php');
//  }
 require 'functions/movieadmin.php';

 $movie = new Movie;
 $movies = $movie->displayMovies();
 $categories = $movie->displayCategories();

 if(isset($_POST['submit'])){
     $movie_title = $_POST['title'];
     $movie_plan = $_POST['plan'];
     $movie_start1 = $_POST['start1'];
     $movie_finish1 = $_POST['finish1'];
     $movie_start2 = $_POST['start2'];
     $movie_finish2 = $_POST['finish2'];
     $movie_start3 = $_POST['start3'];
     $movie_finish3 = $_POST['finish3'];
     $movie_start4 = $_POST['start4'];
     $movie_finish4 = $_POST['finish4'];
     
   

     $result = $movie->addSchedule($movie_title,$movie_plan,
                        $movie_start1,$movie_finish1,$movie_start2,$movie_finish2,$movie_start3,$movie_finish3,
                        $movie_start4,$movie_finish4);

     if($result){
         echo $result;
         header('Location:admin.php');
     }else{
         echo "Unsuccessful!";
     }
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
    
    <title>addSchedule</title>

    <style>
        .container{
            border: 1px solid #3292a6;
            padding: 0;
        }
        body{
            width: 55%;
            margin: 1% auto;
        }
        .body{
            padding: 2%;
        }
        .header {
            
            
            border-bottom: 1px solid #eceeef;
        }
        .row{
            padding: 15px;
        } 
        .bg-faded {background-color: #f7f7f7;}
        .bg-primary {background-color: #3292a6 !important; }
        .btn-primary {
            color: #fff;
            background-color: #3292a6;
            border-color: #3292a6;
        }   
        .btn-primary:hover {
            color: #fff;
            background-color: #26707f;
            border-color: #246977;
        }
        .btn-secondary {
            color: #292b2c;
            background-color: #fff;
            border-color: #ccc;
        }
        .btn-secondary:hover {
            color: #292b2c;
            background-color: #e6e6e6;
            border-color: #adadad;
        }
        .footer{
            border-top: 1px solid #eceeef;
            padding: 15px;
            justify-content: flex-end;
            display: flex;
        }
        
        
    </style>

</head>
<body>
    <div class="container"> 
        <div class="header bg-primary ">
            <div class="row">
                <div class="col-6">
                        <h5 class="text-white mr-auto">Add Schedule</h5>
                </div>
                <div class="col-6">
                        <a href="admin.php"><button class="close">×</button></a>
                </div>
                
            </div>
        </div>
        <div class="body">
            <form action="" method="post" enctype = "multipart/form-data" >
                <div class="form-group">
                    <label for="title" class="form-group-label">Title</label>
                    <select name="title" id="" class="form-control">
                        <?php
                            foreach($movies as $key => $values){
                                echo "<option name=".$values['movie_id']." value=".$values['movie_id'].">".$values['movie_title']."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-group-label">Plan No.</label>
                    <input type="int" name="plan" class="form-control border-prymary w-100" value = "" id="">
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="" class="form-group-label">Start Time1</label>
                        <input type="time" name="start1" class="form-control border-prymary w-100" value = "00:00" id="">
                    </div>
                    <div class="form-group col-6">
                        <label for="" class="form-group-label">Finish Time1</label>
                        <input type="time" name="finish1" class="form-control border-prymary w-100" value = "00:00" id="">
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-6">
                        <label for="" class="form-group-label">Start Time2</label>
                        <input type="time" name="start2" class="form-control border-prymary w-100" value = "00:00" id="">
                    </div>
                    <div class="form-group col-6">
                        <label for="" class="form-group-label">Finish Time2</label>
                        <input type="time" name="finish2" class="form-control border-prymary w-100" value = "00:00" id="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="" class="form-group-label">Start Time3</label>
                        <input type="time" name="start3" class="form-control border-prymary w-100" value = "00:00" id="">
                    </div>
                    <div class="form-group col-6">
                        <label for="" class="form-group-label">Finish Time3</label>
                        <input type="time" name="finish3" class="form-control border-prymary w-100" value = "00:00" id="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="" class="form-group-label">Start Time4</label>
                        <input type="time" name="start4" class="form-control border-prymary w-100" value = "00:00" id="">
                    </div>
                    <div class="form-group col-6">
                        <label for="" class="form-group-label">Finish Time4</label>
                        <input type="time" name="finish4" class="form-control border-prymary w-100" value = "00:00" id="">
                    </div>
                </div>
                
                
                
                <!-- <div class="form-group">
                    <input type="hidden" name="user_id" value = "<?php echo $_SESSION['id'] ?>">
                </div> -->
                <div class="footer">
                    <a href="admin.php"><input type="button" value="Close" class="btn btn-secondary "></a> 
                    <input type="submit" name="submit" value="Add Movie" class="btn btn-primary text-white ml-3">
                </div>
            </form>
        </div>
        
    </div>
</body>
</html>