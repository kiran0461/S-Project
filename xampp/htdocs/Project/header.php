<?php
require_once "./connection.php";
$sql = "SELECT * FROM category";
$cat = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/bootstrap.css">

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Phoenix News</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php"><img src="./images/a.jpg" height="20"></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="news.php">News</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                  </a>
                  <ul class="dropdown-menu">
                    <?php foreach ($cat as $ct) { ?>
                      <li><a class="dropdown-item" href="category.php?cid=<?=$ct['id'];?>"><?= $ct['name']; ?></a></li>
                    <?php } ?>
                  </ul>
                </li>
                <li class="nav-item">  
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
              </ul>
              <form class="d-flex" action="search.php" role="search">
                <input class="form-control me-2" type="search" name="search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>