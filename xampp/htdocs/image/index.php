<?php
if(!empty($_FILES)){
    $name=$_FILES['image']['name'];
    $tmpName=$_FILES['image']['tmp_name'];
    if(move_uploaded_file($tmpName,'images/'.$name)){
        echo 'File uploaded';
    }else{
        echo 'File not uploaded';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <blockquote>
        <h1>File upload</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <button>Add Image</button>
        </form>
    </blockquote>
</body>
</html>