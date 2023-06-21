<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary text-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LK21</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/film">All Film</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/genre">Film Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aboutus">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <?php foreach ($semuafilm as $film): ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="/assets/cover/<?= $film["cover"] ?>" height="280px" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $film["nama_film"] ?>
                            </h5>
                            <p class="card-text">
                                <?= $film["nama_genre"] ?> ||
                                <?= $film["duration"] ?>
                            </p>
                            </p>
                            <a href="#" class="btn btn-info">Detail</a>
                            <a href="#" class="btn btn-success">Update</a>
                            <a href="#" class="btn btn-warning">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>



        <script src="/assets/js/bootstrap.min.js"></script>
</body>

</html>