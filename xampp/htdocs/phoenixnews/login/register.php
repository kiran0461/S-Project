<?php
require_once "../connection.php";

if(!empty($_POST)){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $sql="INSERT INTO users(name,email,password)
    VALUES('$name','$email','$password')";
    $res =mysqli_query($conn,$sql);
    if($res){
        echo "success";
    }else{
        echo "there was a problem";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>
    <div class="container mt-5 mb-4">
        <div class="row">
            <div class="col-md-12">
                <h1>Register Here</h1>
            </div>
            <div class="col-md-12">
                <form action="" method="post">
                <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-success">Register</button>
                    </div>
                </form>
                <hr>
                <a href="./index.php">Login</a>
            </div>
        </div>
    </div>
</body>

</html>