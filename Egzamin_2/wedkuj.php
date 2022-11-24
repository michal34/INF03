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
    <div class="blok_srodkowy">
        <div class="blok_lewy">
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
                                    echo "<li>" . $row['nazwa'] . " pływa w rzece " . $row['akwen'] . ", " . $row['wojewodztwo'];
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
                        <th class="th">L.p.</th>
                        <th class="th">Gatunek</th>
                        <th class="th">Występowanie</th>
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
                                    echo "<tr class='tr'><td>" . $row['id'] . "</td><td>" . $row['nazwa'] . "</td><td>" . $row['wystepowanie'] . "</td></tr>"; 
                                }
                            }
                        }
                        mysqli_close($link);
                    ?>
                </table>
            </div>
        </div>
        <div class="blok_prawy">
                <div>
                    <image class="img" src="./ryba1.jpg" alt="sum" />
                    <a class="link" href="./kwerendy.txt">Pobierz kwerendy</a>
                </div>
            </div>
    </div>
    <footer class="blok_stopki">
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>