<?php
require_once "../connection.php";
if(!isset($_SESSION['name']) || $_SESSION['is_login']!=true){
  header("Location:/phoenixnews/login");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/bootstrap.css">

</head>

<body>
  <div class="container mt-2 mb-3">
    <div class="row">
      <div class="col-md-12">
        <h1>Welcome: <?=$_SESSION['name'];?></h1>
        <a href="logout.php" class="btn btn-danger">Logout</a>
        <hr>
      </div>
      <div class="col-md-12">
        <a href="manage-category.php">Manage Category</a>
        <a href="add_news.php">Add News</a>
        <a href="">Show News</a>
      </div>
    </div>
  </div>