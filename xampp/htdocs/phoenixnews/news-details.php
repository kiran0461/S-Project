<?php
require_once "header.php";
require_once "connection.php";
$id=$_GET['nid'];
$sql = "SELECT * FROM news WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$newsData=mysqli_fetch_assoc($result);

$rsql="SELECT * FROM news WHERE id!='$id'";
$rResult=mysqli_query($conn,$rsql);
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1><a href=""><?=$newsData['title'];?></a></h1>
            <img src="admin/images/<?= $newsData['image']; ?>" class="img-fluid" alt="">
            <p>
            <?=$newsData['description'];?>
            </p>
        </div>
        <div class="col-md-4">
            <h1>Related News</h1>
            <ul>
                <?php foreach($rResult as $nn) 
                { ?>
                    <li><a href="news-details.php?nid=<?= $nn['id']; ?>"><?=$nn['title']?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<?php
require_once "footer.php";
?>