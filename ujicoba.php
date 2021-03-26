<?php
function grade($nilai_akhir){
    if($nilai_akhir >= 85 && $nilai_akhir <= 100) {
        return '<b class = "text-success">Grade A</b>';
    }
    elseif($nilai_akhir >= 70 && $nilai_akhir <= 84) {
        return '<b class = "text-success">Grade B</b>';
    }
    elseif($nilai_akhir >= 56 && $nilai_akhir <= 69) {
        return '<b class ="text-success">Grade C</b>';
    }
    elseif($nilai_akhir >= 36 && $nilai_akhir <= 55) {
        return '<b class ="text-success">Grade D</b>';
    }
    elseif($nilai_akhir >= 0 && $nilai_akhir <= 35) {
        return '<b class ="text-sucess">Grade E</b>';
    }
    else{
        return '<b class ="text-danger">Grade ?</b>';
    }
}
function predikat($nilai_akhir){
    switch (true){
        case $nilai_akhir >= 85 && $nilai_akhir <= 100:
            return '<h5 class = "text-info">Sangat Memuaskan</h5><br><br>';
            break;
        case $nilai_akhir >= 70 && $nilai_akhir <= 84:
            return '<h5 class = "text-info">Memuaskan</h5><br><br>';
            break;
        case $nilai_akhir >= 56 && $nilai_akhir <= 69:
            return '<h5 class = "text-info">Kurang</h5><br><br>';
            break;
        case $nilai_akhir >= 36 && $nilai_akhir <= 55:
            return '<h5 class = "text-info">Cukup</h5><br><br>';
            break;
        case $nilai_akhir >= 0 && $nilai_akhir <= 54:
            return '<h5 class = "text-info">Sangat Kurang</h5><br><br>';
            break;
            default:
            return '<h5>"Tidak Ada"</h5>';
    }
}
function kelulusan($nilai_akhir){
    if($nilai_akhir > 55){
        return "lulus";
    }else{
        return"tidak lulus";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Nilai</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <?php
    $proses = $_GET['proses'];
    $NamaMahasiswa = $_GET['NamaMahasiswa'];
    $nim = $_GET['nim'];
    $nilai1uts = $_GET['nilai1uts'];
    $nilai1uas = $_GET['nilai1uas'];
    $nilai1tugas = $_GET['nilai1tugas'];
    $total = ($nilai1uts + $nilai1uas + $nilai1tugas) / 3;
    $nilai_akhir = number_format($total,2);
    ?>
    <div class = "container shadow bg-light p-5 mt-5">
    <h3 class = "text-center text-primary mb-5">Nilai Siswa</h3>
    <?php
    echo "<b> Proses : </b> $proses<br><br>";
    echo "<b> Nama Mahasiswa : </b> $NamaMahasiswa<br><br>";
    echo "<b> nim  : </b> $nim<br><br>";
    echo "<b> nilai Uts : </b> $nilai1uts <br><br>";
    echo "<b> nilai Uas : </b> $nilai1uas <br><br>";
    echo "<b> nilai Tugas : </b> $nilai1tugas <br><br>";
    echo "<b> Total : </b> $nilai_akhir <br><br>";
    echo grade($nilai_akhir)."<br><br>";
    echo predikat($nilai_akhir);
    echo kelulusan($nilai_akhir);
    ?>
</body>
</html>