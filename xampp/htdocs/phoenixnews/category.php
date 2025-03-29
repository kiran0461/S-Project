<?php
require_once "header.php";
require_once "connection.php";

$cid = $_GET['cid'];
$sql = "SELECT category.*,news.* FROM category
JOIN news ON news.category_id=category.id
WHERE news.category_id='$cid'";

$newsData = mysqli_query($conn, $sql);
?>

<div class="comtainer">
    <div class="row mt-3 mb-5">
        <div class="col-md-12">Category Page</div>
    </div>
    <div class="row">
        <?php foreach($newsData as $news) { ?>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="admin/images/<?= $news['image']; ?>" height="200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $news['title']; ?></h5>
                    <p class="card-text"><?= $news['description']; ?></p>
                    <a href="news-details.php?nid=<?= $news['id']; ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php
require_once "footer.php";
?>