<?php 

    require '../function/Teacher.php';
    $teacher = new Teacher;
    $id = $_GET['id'];
    $details = $teacher->displayOneTeacher($id);
    if (isset($_POST['submit'])){
        $confirm = $_POST['confirm']; //this holds the text for confirmation
        if($confirm == 'delete'){
            $teacher->deleteTeacher($id);
            header('Location: basic-table.php');
        }else{
            header('Location: basic-table.php');
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
    <title>Document</title>
    
</head>
<body>
    <div class="container">
        <div class="card border-danger m-3 p-3">
            <h4 class="card-title">Are you sure you're going to delete this course?</h4>
            <p class="card-text">Please type 'delete' if you are sure. If not, type 'cancel'</p>
            <p class="card-text">Details<br>
                Teacher Name: <?php echo $details['teacher_name'];?><br>
                Teacher Email:<?php echo $details['teacher_email'];?><br>
            </p>
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Type Here:</label>
                    <input type="text" name="confirm" id="" class="form-control">          
                </div>
                <input type="submit" value="Submit" name="submit" class="btn btn-danger text-white">
            </form>
        </div>
    </div>
</body>
</html>