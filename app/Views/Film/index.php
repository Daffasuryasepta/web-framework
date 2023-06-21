<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Film</title>
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
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>Semua Film</h1>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="/film/add" class="btn btn-primary">Tambah Data </a>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <tr>
                            <th>No.</th>
                            <th>Cover</th>
                            <th>Nama</th>
                            <th>Genre</th>
                            <th>Duration</th>
                            <th>Action</th>
                        </tr>
                        <?php $i = 1;
                        foreach ($data_film as $film): ?>
                            <tr>
                                <td>
                                    <?= $i++; ?>
                                </td>
                                <td><img src="/assets/cover/<?= $film["cover"] ?>" width="30px" height="100px"
                                        class="card-img-top"></td>
                                <td>
                                    <?= $film["nama_film"] ?>
                                </td>
                                <td>
                                    <?= $film["nama_genre"] ?>
                                </td>
                                <td>
                                    <?= $film["duration"] ?>
                                </td>
                                <td>
                                    <a href="" class="btn btn-success">Update</a>
                                <td>
                                    <a href="/film/update/<?= $film["id"]; ?>" class="btn btn-success">Update</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>

        <script src="/assets/js/bootstrap.min.js"></script>
</body>

</html>