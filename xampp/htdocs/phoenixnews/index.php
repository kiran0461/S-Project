<?php
require_once "header.php";
require_once "connection.php";

$sql = "SELECT * FROM news";
$result = mysqli_query($conn, $sql);

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/a.jpg" height="500" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/b.jpg" height="500" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/c.jpg" height="500" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h1>Nepal</h1>
        </div>
    </div>
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
</div>

<?php
require_once "footer.php";
?>