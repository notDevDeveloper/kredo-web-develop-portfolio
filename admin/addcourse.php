<?php 

require '../function/Stock.php';
$stock = new Stock;

$listteachers = $stock->listTeacher();

if(isset($_POST['addcourse'])){
    $course_teacher = $_POST['teacher'];
    $course_date = $_POST['coursedate'];
    $course_timezone = $_POST['timezone'];

    $result = $stock->addCourse($course_teacher, $course_date, $course_timezone);

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
            <h2 class="header-title">Add Course</h2>
            <button class="close mb-2">
                    <span><a href="index.php" class="text-black">x</a></span>
            </button>
        </div>
    </header>
    <div class="container">
        <form action="" method="post">
        <div class="form-group">
            <label>Teacher</label>
            <select name="teacher" id="" class="form-control"> 
                <?php 
                    echo "<option value='select none'>Select Teacher</option>";
                    foreach($listteachers as $key=> $values){
                        echo "<option value='".$values['teacher_id']."'>".$values['teacher_name']."</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" name="coursedate" class="form-control" value="<?php date('T-m-d'); ?>">
        </div>
        <div class="form-group">
            <label>Time Zone</label>
            <select name="timezone" id="" class ="form-control">
                <option value="select none">Select Timezone</option>
                <option value="morning">Morning(9:00-13:00)</option>
                <option value="afternoon">Afternoon(14:00-18:00)</option>
                <option value="night">Night(19:00-23:00)</option>
            </select>
        </div>
        

        <br><hr>
        <div class="footer">
            <input type="submit" name="addcourse" class="btn btn-primary ml-3" value="Add Course">
        </div>   
        </form>
            <button class="btn btn-outline-secondary ml-1"><a href="dashboard.php">Back to dashboard</a></button>
    </div>
 
</body>
</html>