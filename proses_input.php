<?php
include "koneksi.php";
if(isset($_POST['reaksi'])){
    $nik = $_POST['nik'];
    $reaksi = $_POST['reaksi'];
    $tanggal = date("Y-m-d");
    if($nik=='' || $reaksi == ''){
        echo "<script>alert('There are several fields that are empty'); window.location.href='index.php';</script>";
    }
    else{
    $sql = "insert into reaksi(nik,reaksi,tanggal) values('$nik','$reaksi','$tanggal')";
    $Send = mysqli_query($kon,$sql);
    if($Send){
        echo "<script>alert('Success was Recorded'); window.location.href='index.php';</script>";
    }
    else
    echo "<script>alert('Failed to insert Data'); window.location.href='index.php';</script>";
    }
}

?>