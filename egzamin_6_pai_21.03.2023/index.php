<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Nasz sklep komputerowy</title>
        <link rel="stylesheet" href="./styl8.css" />
    </head>
    <body>
        <div class="header">
            <div class="blok_menu">
                <ul>
                    <li><a href="./index.php">Główna</a></li>
                    <li><a href="./procesory.html">Procesory</a></li>
                    <li><a href="./ram.html">RAM</a></li>
                    <li><a href="./grafika.html">Grafika</a></li>
                <ul>
            </div>
            <div class="blok_logo">
                <h2>Podzespoły komputerowe</h2>
            </div>
        </div>
        <div class="blok_glowny">
            <h1>Dzisiajsze promocje</h1>
            <table>
                <tr>
                    <th class="th_numer">NUMER</th>
                    <th>NAZWA PODZESPOŁU</th>
                    <th class="th_opis">OPIS</th>
                    <th class="th_cena">CENA</th>
                </tr>
                <?php
                    $db = mysqli_connect('localhost', 'root', '', 'sklep');

                    $query = 'SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena < 1000';
                    if($result = mysqli_query($db, $query)) {
                        if(mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_row($result)) {
                                echo('<td>' . $row[0] . '</td><td>' . $row[1] . '</td><td>' . $row[2] . '</td><td class="cena" >' . $row[3] . '</td>');
                            }
                        }
                    }

                    mysqli_close($db);
                ?>
                  <tr>
                    <td>NUMER4214214</td>
                    <td>NAZWA PODZESPOŁU4214241</td>
                    <td>OPIS42121515</td>
                    <td class="cena">CENA561524</td>
                </tr>
            </table>
        </div>

        <div class="footer">
            <div class="footer_1">
                <img src="./scalak.jfif" alt="promocje na procesory" />
            </div>
             <div class="footer_2">
                <h4>Nasz Sklep Komputerowy</h4>
                <p>Współpracujemy z hurtownią <a target="blank" href="http://www.edata.pl/">edata</a></p>
            </div>
             <div class="footer_3">
                <p>zadzwoń: 601 602 603</p>
            </div>
             <div class="footer_4">
                <p>„Stronę wykonał: 12312312312</p>
            </div>
        </div>
    </body>
</html>