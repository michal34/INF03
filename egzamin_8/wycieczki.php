<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="./styl4.css" />
</head>
<body>
    <div class="baner">
        <h1>BIURO TURYSTYCZNE</h1>
    </div>
    <div class="dane">
        <h3>Wycieczki, na które są wolne miejsca</h3>
        <ul>   
            <?php
                $db = mysqli_connect("localhost", "root", "", "biuro");
                $query = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = '1'";

                if($result = mysqli_query($db, $query)) {
                    while($row = mysqli_fetch_row($result)){
                        echo('<li>' . $row[0] . ' dnia ' . $row[1] . ' jedzie do celu ' . $row[2] . ', cena ' . $row[3] . '</li>');
                    }
                }
            ?>
        <ul>
    </div>
    <div class="content">
        <div class="blok_lewy">
            <h2>Bestselery</h2>
            <table>
                <tr>
                    <td>Wenecja</td>
                    <td>kwiecień</td>
                </tr>
                <tr>
                    <td>Londyn</td>
                    <td>lipiec</td>
                </tr>
                <tr>
                    <td>Rzym</td>
                    <td>wrzesień</td>
                </tr>   
            </table>
        </div>
        <div class="blok_srodkowy">
            <h2>Nasz zdjęcia</h2>
            <?php
                $query2 = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC";
                if($result2 = mysqli_query($db, $query2)) {
                    while($row2 = mysqli_fetch_row($result2)) {
                        echo("<img src='./" . $row2[0] .".png' alt='" . $row2[1] . "' />" );
                    }
                }
            ?>
        </div>
        <div class="blok_prawy">
            <h2>Skontaktuj się</h2>
            <a href="mailto:turysta@wycieczki.pl">turysta@wycieczki.pl</a>
            <p>telefon: 111222333</p>
        </div>
    </div>
    <div class="stopka">
        <p>Stronę wykonał: </p>
    </div>
</body>
</html>
