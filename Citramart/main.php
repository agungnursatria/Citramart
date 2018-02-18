<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <title>Citra Mart</title>
</head>
<body>
    <?php
        session_start();
        if (!isset($_SESSION['username'])){
            header("Location: index.php");
        }
        echo $_SESSION['username']." berhasil masuk";
    ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <a href="logout.php" class="btn btn-primary">Log Out</a>

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>