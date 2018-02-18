<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <title>Citra Mart</title>
</head>
<body>
    <div class="container">
        <br><br><br><br><br><br><br><br>
        <?php
            $bulan = $_GET['bln'];
            $tahun = $_GET['thn'];
            $laporan = $_GET['laporan'];
            echo "Bulan: ".$bulan." Tahun: ".$tahun;
            if ($laporan == 'hmember'){
                include ('hutangmember.php');
            } elseif ($laporan == 'hsupplier'){
                include ('hutangsupplier.php');
            } elseif ($laporan == 'rugilaba'){
                include ('rugilaba.php');
            } else {
                include ('jurnalkeuangan.php');
            }
        ?>
    </div>
</body>
</html>