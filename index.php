<?php
include "koneksi.php";
$count = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM reaksi"));
$countSenang = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM reaksi where reaksi='senang'"));
$countSedih = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM reaksi where reaksi='sedih'"));
$countMarah = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM reaksi where reaksi='marah'"));
$countPuas = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM reaksi where reaksi='puas'"));
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid">
    <form action="proses_input.php" method="post">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="nik" class="col-form-label">NIK</label>
            </div>
            <div class="col-auto">
                <input type="text" name="nik" class="form-control">
            </div>
        </div>
        <div class="row" style="margin-top:20px">
            <div class="col-auto">
            <input class="btn btn-primary" name="reaksi" value="senang" type="submit"></input>
            </div>
            <div class="col-auto">
            <input class="btn btn-danger" name="reaksi" value="marah" type="submit"></input>
            </div>
            <div class="col-auto">
            <input class="btn btn-warning" name="reaksi" value="sedih" type="submit"></input>
            </div>
            <div class="col-auto">
            <input class="btn btn-info" name="reaksi" value="puas" type="submit"></input>
            </div>
        </div>
        <div class="row" style="margin-top:20px">
            <div class="col-md-12">
            Persentase Senang : <?= round(($countSenang/$count)*100,2) ?> %
            </div>
            <div class="col-md-12">
            Persentase Sedih : <?= round(($countSedih/$count)*100,2) ?> %
            </div>
            <div class="col-md-12">
            Persentase Marah : <?= round(($countMarah/$count)*100,2) ?> %
            </div>
            <div class="col-md-12">
            Persentase Puas : <?= round(($countPuas/$count)*100,2) ?> %
            </div>
        </div>
    </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>