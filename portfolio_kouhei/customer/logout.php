<?php

session_start();  //session を使うときは必ずいる
session_destroy();   //logoutの作業
header('Location: index.php')

?>