<?php $this->extend('layout/layout') ?>
<?php $this->section('content') ?>

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
                                <a href="/film/update/<?= $film["id"]; ?>" class="btn btn-success">Update</a>
                                <a class="btn btn-danger" onclick="return confirmDelete()">Delete</a>
                            </td>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete() {
            swal({
                title: "Apakah Anda yakin?",
                text: "setelah dihapus! data anda akan benar-benar hilang!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {

                        window.location.href = "/film/destroy/<?= $film['id'] ?>";

                    } else {
                        swal("Data tidak jadi dihapus!");
                    }
                });
        }

    </script>
    <!-- sampai sini -->
    <?php $this->endSection() ?>