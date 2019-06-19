<?php 

require '../function/Admin.php';
$admin = new Admin;

if(isset($_POST['addadmin'])){
    $admin_name = $_POST['adminname'];
    $admin_email = $_POST['adminemail'];
    $admin_pass = $_POST['password'];
    $admin_confirmpass = $_POST['confirm_pass'];

    $result = $admin->addAdmin($admin_name, $admin_email, $admin_pass, $admin_confirmpass);

    if($result){
        echo "successfully Added";
       header('Location: dashboard.php');
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
    .bg-warning {
        color: #fff;
        background-color: #f0ad4e;
        border-color: #f0ad4e;
    }
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


    <header class="bg-primary py-4">
        <div class="container-fluid">
            <h2 class="header-title text-white">Sign up admin</h2>
            <button class="close mb-2">
                    <span><a href="index.php" class="text-black">x</a></span>
            </button>
        </div>
    </header>
    <div class="container mt-4">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="adminname" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="adminemail" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirm_pass" class="form-control">
        </div>
        

        <br><hr>
        <div class="footer">
            <input type="submit" name="addadmin" class="btn btn-primary ml-3" value="Add admin">
        </div>   
        </form>
            <button class="btn btn-outline-secondary ml-1"><a href="dashboard.php">Back to dashboard</a></button>
    </div>
 
</body>
</html>