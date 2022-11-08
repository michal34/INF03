<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="./styl_1.css" />
</head>
<body>
    <header class="blok_banera">
        <h1>Portal dla wędkarzy</h1>
    </header>
    <div style="display: flex">
        <div style="width: 55%; background:#efefef ">
            <div class="blok_lewy_gorny">
                <h3>Ryby zamieszkujące rzeki</h3>
                <ol>
                    <?php 
                        $link = mysqli_connect("localhost", "root", "", "wedkowanie");

                        if($link === false) {
                            die("Error". mysqli_connect_error());
                        }

                        $query = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby
                        LEFT JOIN lowisko ON lowisko.Ryby_id = ryby.id
                        WHERE lowisko.rodzaj = 3";

                        if($result = mysqli_query($link, $query)) {
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    echo "<li>" . $row['nazwa'] . " pływa w " . $row['akwen'] . ", " . $row['wojewodztwo'];
                                }
                            }
                        }

                        mysqli_close($link);
                    ?>
                </ol>
            </div>
            <div class="blok_lewy_dolny">
                <h3>Ryby drapieżne naszych wód</h3>
                <table class="table">
                    <tr class="tr">
                        <td class="td">L.p.</td>
                        <td class="td">Gatunek</td>
                        <td class="td">Występowanie</td>
                    </tr>
                    <?php 
                        $link = mysqli_connect("localhost", "root", "", "wedkowanie");

                        if($link === false) {
                            die("Error". mysqli_connect_error());
                        }

                        $query = " SELECT id, nazwa, wystepowanie FROM `Ryby` WHERE `styl_zycia` = 1";

                        if($result = mysqli_query($link, $query)) {
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr class='tr'><td class='td'>" . $row['id'] . "</td><td class='td'>" . $row['nazwa'] . "</td><td class='td'>" . $row['wystepowanie'] . "</td></tr>"; 
                                }
                            }
                        }
                        mysqli_close($link);
                    ?>
                </table>
            </div>
        </div>
        <footer class="blok_prawy">
            <image class="img" height="400px" src="./ryba1.jpg" alt="sum" />
            <a style="display: block" href="./kwerendy.txt">Pobierz kwerendy</a>
        </footer>
    </div>
    <div class="blok_stopki">
        <p>Strone wykonał: 00000000000</p>
    </div>
</body>
</html>