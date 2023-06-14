<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
</head>

<body>
    <h1>Data Film</h1>
    <table border="1" cellspaccing="0" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Cover</th>
            <th>Nama</th>
            <th>Genre</th>
            <th>Durasi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($semuafilm as $film): ?>
            <tr>
                <td>
                    <?php echo $i++; ?>
                </td>
                <td><img style="widht: 50px;" src="/assets/cover/<?= $film['cover'] ?>" alt=""></td>
                <td>
                    <?php echo $film['nama_film'] ?>
                </td>
                <td>
                    <?php echo $film['nama_genre'] ?>
                </td>
                <td>
                    <?php echo $film['duration'] ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>