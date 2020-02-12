<?php

 session_start();

//  if(empty($_SESSION)){
//      header('Location:login.php');
//  }
 require 'functions/movieadmin.php';

 $movie = new Movie;

 $categories = $movie->displayCategories();

 if(isset($_POST['submit'])){
     $movie_title = $_POST['title'];
     $movie_category = $_POST['category'];
     $movie_length = $_POST['length'];
     $movie_screen = $_POST['screen'];
     $movie_body = $_POST['body'];
    //  $user_id = $_POST['user_id'];

//     //actual filename
     $movie_image_filename = $_FILES['files']['name'];
//     //temporary filename
     $movie_image_tmpname = $_FILES['files']['tmp_name'];

     $directory = "../cinema/img/";

     $result = $movie->addMovie($movie_image_filename,$movie_image_tmpname,$directory,$movie_title,$movie_category,
                        $movie_length,$movie_screen,$movie_body);

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
    
    <title>addMovie</title>

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
                        <h5 class="text-white mr-auto">Add Movie</h5>
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
                    <input type="text" name="title" class="form-control border-prymary w-100" id="">
                </div>
                <div class="form-group">
                    <label for="category" class="form-group-label">Category</label>
                    <select name="category" id="" class="form-control">
                        <?php
                            foreach($categories as $key => $values){
                                echo "<option name=".$values['category_id']." value=".$values['category_id'].">".$values['category_title']."</option>";
                            }
                        ?>
                    </select>
                </div>
                
                <div class="row">
                    <div class="form-group col-6">
                        <label for="" class="form-group-label">Length</label>
                        <input type="time" name="length" class="form-control border-prymary w-100 " id="" value="0 min">
                    </div>
                    <div class="form-group col-6">
                        <label for="" class="form-group-label">Screen</label>
                        <input type="time" name="screen" class="form-control border-prymary w-100 " id="" value="screen 0">
                    </div>
                </div>
                
                <div class="form-group bg-faded p-3">
                    <label for="" class="form-group-label">Image Upload</label>
                    <input type="file" name="files" id="" class="form-control">
                    <small class="text-muted">Max Size 3MB</small>
                </div>
                <div class="form-group">
                    <label for="body" class="form-control-label">Body</label>
                    <br>
                    <textarea name="body" id="" cols="60" rows="10" class="w-100"></textarea>
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