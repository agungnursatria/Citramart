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
    <div class="container-fluid">
    <br><br>
    <h1 style="text-align: center">Silahkan Masukkan Data</h1>
    <br><br><br><br><br>
    <form class="form-horizontal" action="keuangansession.php" method="GET">
        <div class="form-group">
            <label class="control-label col-sm-5 col-xs-4" for="bln">Masukkan bulan:</label>
            <div class="col-sm-2 col-xs-5">
                <input type="number" min="1" max="12" oninput="if(value.length>2)value=value.slice(0,2)" class="form-control" id="bln" placeholder="--" name="bln" required>
            </div>
            <span class="glyphicon glyphicon-calendar" aria-hidden="true" style="margin-top:10px"></span>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5 col-xs-4" for="thn">Masukkan tahun:</label>
            <div class="col-sm-2 col-xs-5">          
                <input type="number" min="1" max="2017" oninput="if(value.length>4)value=value.slice(0,4)" class="form-control" id="thn" placeholder="----" name="thn" required>
            </div>
            <span class="glyphicon glyphicon-calendar" aria-hidden="true" style="margin-top:10px"></span>
        </div>
        <div class="form-group">        
            <label class="control-label col-sm-5 col-xs-4" for="laporan">Laporan    :</label>
            <div class="col-sm-2 col-xs-5" style="margin-top:10px">          
                <select name="laporan">
                    <option value="hmember">Hutang Member</option>
                    <option value="hsupplier">Hutang Supplier</option>
                    <option value="rugilaba">Labar Rugi</option>
                    <option value="keuangan">Keuangan</option>
                </select>
            </div>
        </div>
        <br><br>
        <div class="form-group">        
            <div class="col-sm-offset-4 col-xs-offset-1 col-sm-12 col-xs-12">
                <button type="submit" class="btn btn-primary col-sm-1 col-xs-3" style="border-radius:0px;margin-left:40px;">Cari</button>
                <a href="index.php" class="btn btn-default col-sm-1 col-xs-3" style="border-radius:0px;margin-left:40px;">Kembali</a>
            </div>
        </div>
    </form>
    </div>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>