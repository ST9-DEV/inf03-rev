<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauracja Wszystkie Smaki</title>
</head>
<body>
&nbsp;
</body>
</html>

<?php
$server='localhost';
$user='root';
$password='';
$database='baza1';
$con=mysqli_connect($server, $user, $password, $database);
if (!$con) {
    die("Połączenie nieudane: " . mysqli_connect_error());
}
$data=$_POST['data'];
$osoby=$_POST['os'];
$telefon=$_POST['tel'];
$sql="INSERT INTO `rezerwacje`(`id`, `data_rez`, `liczba_osob`, `telefon`) VALUES ('','$data','$osoby','$telefon',)";
if (mysqli_query($con, $sql)) {
    echo "Dodano rezerwację do bazy";
} else {
    echo "Błąd: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>