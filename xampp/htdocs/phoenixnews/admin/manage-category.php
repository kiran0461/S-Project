<?php
require_once "header.php";
require_once "../connection.php";

if(!empty($_POST)){
    $name=$_POST['name'];
    $sql="INSERT INTO category(name) VALUES('$name')";
    $res=mysqli_query($conn,$sql);
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Manage Category</h1>
        </div>
        <div class="col-md-12">
            <form action="" method="post">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control"><br>
                <button>Add Category</button>
            </form>
        </div>
    </div>
</div>

<?php
require_once "footer.php";
?>