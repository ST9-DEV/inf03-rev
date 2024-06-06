<?php
    $serwer='localhost';
    $user='root';
    $password='';
    $database='wedkarstwo';
    $con=mysqli_connect($serwer, $user, $password, $database);
    if (!$con){
        die("Połączenie nieudane: " . mysqli_connect_error($sql));};
    $lowisko=$_POST['lowisko'];
    $data=$_POST['data'];
    $sedzia=$_POST['sedzia'];
    $sql="INSERT INTO zawody_wedkarskie(`id`, `Karty_wedkarskie_id`, `Lowisko_id`, `data_zawodow`, `sedzia`) VALUES ('','0','$lowisko','$data','$sedzia');";
    mysqli_query($con, $sql);
    mysqli_close($con);
    
?>