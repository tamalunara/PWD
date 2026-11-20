<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum Pertemuan 6</title>
</head>
<body>
    <h3>1) Bilangan Genap 1 - 10</h3>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }
    }
    ?>

    <br><br>

    <h3>2) Tabel </h3>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <td style="background-color: lime;">bilangan</td>
            <?php for ($j = 1; $j <= 10; $j++) { ?>
                <td style="background-color: lime;"><?= $j ?></td>
            <?php } ?>
        </tr>

        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <tr>
                <td style="background-color: lime;"><?= $i ?></td>
                <?php for ($j = 1; $j <= 10; $j++) {
                    $hasil = $i * $j;
                    $warna = ($hasil % 2 == 0) ? "cyan" : "yellow";
                ?>
                    <td style="background-color: <?= $warna ?>;"><?= $hasil ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>