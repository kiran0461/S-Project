<?php
require_once "header.php";
require_once "connection.php";

$sql = "SELECT * FROM news";
$result = mysqli_query($conn, $sql);

?>


<div class="row">
        <?php foreach ($result as $news) : ?>
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
        <?php endforeach ?>
    </div>

    <?php
    require_once "footer.php";
    ?>