<?php 

require '../function/Teacher.php';
$teacher = new Teacher;

if(isset($_POST['addteacher'])){
    $teacher_name = $_POST['teachername'];
    $teacher_email = $_POST['teacheremail'];
    $teacher_cefr = $_POST['teachercefr'];
    $teacher_specialty = $_POST['specialty'];

    $teacher_image_filename = $_FILES['teacher_image']['name'];
    $teacher_image_tmpname = $_FILES['teacher_image']['tmp_name'];

    $directory = "../images/";

    $result = $teacher->addTeacher($teacher_image_filename, $teacher_image_tmpname, $directory, $teacher_name, $teacher_email, $teacher_cefr, $teacher_specialty);

    if($result){
        echo "successfully Added";
    //    header('Location: users.php');
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
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
    <style>
    .footer {
        display: flex;
        justify-content: flex-end;
    }
    .text-black {
        color:#000;
    }
    .header-title {
        display: inline-block;
    }
    body {
    font-family: 'Bellefair', serif;
    font-size: 16px;
    }
    </style>
<body>


    <header class="bg-primary text-white py-4">
        <div class="container-fluid">
            <h2 class="header-title">Add Teacher</h2>
            <button class="close mb-2">
                    <span><a href="index.php" class="text-black">x</a></span>
            </button>
        </div>
    </header>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="teachername" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="teacheremail" class="form-control">
        </div>
        <div class="form-group">
            <label>CEFR</label>
            <select name="teachercefr" id="" class = "form-control">
                <option value="a1">A1</option>
                <option value="a2">A2</option>
                <option value="b1">B1</option>
                <option value="b2">B2</option>
                <option value="c1">C1</option>
                <option value="c2">C2</option>
            </select>
        </div>
        <div class="form-group">
            <label>Specialty</label>
            <input type="text" name="specialty" class="form-control">
        </div>
        <div class="form-group">
            <label>User Image Upload</label>
            <input type="file" name="teacher_image" class="form-control">
        </div>

        <br><hr>
        <div class="footer">
            <input type="submit" name="addteacher" class="btn btn-primary ml-3" value="Add Teacher">
        </div>   
        </form>
            <button class="btn btn-outline-secondary ml-1"><a href="dashboard.php">Back to dashboard</a></button>
    </div>
</body>
</html>