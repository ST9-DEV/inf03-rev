<?php
$serwer='localhost';
$user='root';
$haslo='';
$baza='wedkowanie';
$con=mysqli_connect($serwer, $user, $haslo, $baza);
if (!$con){
    die("Połączenie nieudane:" . mysqli_connect_error());}

$sql1="SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby, lowisko WHERE ryby.id = lowisko.Ryby_id AND lowisko.rodzaj=3;";
$wynik1=mysqli_query($con, $sql1); 
 ?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="/styl1.css">
</head>
<body>
    <div class="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>
    <div class="blok_l1">
        <h3>
            Ryby zamieszkujące nasze rzeki
        </h3>
        <ol>
            <?php while($row=mysqli_fetch_array($wynik1)){
                echo "<li>$row[0] pływa w rzece $row[1], $row[2]</li>";
            } ?>
        </ol>
    </div>
    <div class="blok_l2">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>
            <?php 
            $sql2="SELECT id, nazwa, wystepowanie FROM `ryby` WHERE styl_zycia = 1;";
            $wynik2=mysqli_query($con, $sql2);
            while($row=mysqli_fetch_array($wynik2)){
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
            }
             ?>
        </table>
    </div>
    <div class="blok_p"><img src="/ryba1.jpg" alt='Sum'><br>
    <a href="/kwerendy.txt" download>Pobierz kwerendy</a></div>
    <footer class="stopka"><p>Stronę wykonał: 00000000000</p></footer>
</body>
</html>
<?php mysqli_close($con); ?>