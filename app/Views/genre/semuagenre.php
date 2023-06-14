<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre</title>
</head>

<body>
    <h1>Data Genre</h1>
    <table border="1" cellspaccing="0" cellpadding="5">
        <tr>
            <th>Genre</th>
            <th>Dibuat</th>
            <th>Diupdate</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($semuagenre as $genre): ?>
            <tr>
                <td>
                    <?php echo $i++; ?>
                    <?php echo $genre['nama_genre'] ?>
                </td>
                <td>
                    <?php echo $genre['created_at'] ?>
                </td>
                <td>
                    <?php echo $genre['update_at'] ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>