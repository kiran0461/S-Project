<?php
require_once "header.php";
require_once "../connection.php";

$sql = "SELECT * FROM category";
$cat = mysqli_query($conn, $sql);

if(!empty($_POST)){
    $catId=$_POST['category_id'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $name=$_FILES['image']['name'];
    $tmp=$_FILES['image']['tmp_name'];
    if(!move_uploaded_file($tmp,'images/'.$name)){
        echo "file upload error";
    }
    $insertSql="INSERT INTO news(category_id,title,image,description)
    VALUES('$catId','$title','$name','$description')";
    $response=mysqli_query($conn,$insertSql);
    if(!$response){
        echo "data not inserted";
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Add News</h3>
        </div>
        <div class="col-md-12">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="">Category</label>
                    <select class="form-control" name="category_id" required>
                        <option value="">---Select Category</option>
                        <?php foreach($cat as $category) { ?>
                            <option value="<?=$category['id'];?>"><?=$category['name'];?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="form-group mb-3">
                    <button class="btn btn-success">Add News</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require_once "footer.php";
?>