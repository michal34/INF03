<html>
    <head>
        <meta charset="utf-8">
        <title>Artykuły papiernicze</title>
        <link rel="stylesheet" href="./styl.css">
    </head>
    <body>
        <div class="baner">
            <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
        </div>
        <div class="container">
            <div class="baner_lewy">
                <h2>Kontakt</h2>
                <p><i>telefon: 444333222 <br> e-mail: bok@sklep.p</i></p>
                <img src="./promocja2.png" alt="promocja">
            </div>
            <div class="baner_srodkowy">
                <h2>Promocja 10% obejmuje artykuły:</h2>
                <ul>
                    <?php 
                        $db = mysqli_connect("localhost", "root", "", "sklep");

                        $query = 'SELECT nazwa FROM towary WHERE promocja > 0';
                        if($result = mysqli_query($db, $query)) {
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    echo "<li>" . $row['nazwa'] . "</li>";
                                }
                            }
                        }
                    ?>
                </ul>
            </div>
            <div class="baner_prawy">   
                <h2>Cena wybranego artykułu w promocji</h2>
                <form method="POST" >
                    <select name="id">
                        <?php 
                            $query = 'SELECT * FROM towary';
                            if($result = mysqli_query($db, $query)) {
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<option value=" . $row['cena'] . " >" . $row['nazwa'] . "</option>";
                                    }
                                }
                            }
                            mysqli_close($db);
                        ?>
                    </select>
                    <input type="submit" value="WYBIERZ" >  
                </form>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) ) {
                    $cena = $_POST['id'];
                    echo("<p>" . round($cena * 0.9, 2) . "</p>");
                }
            ?>
            </div>
        </div>
        <div class="stopka">
            
        </div>
    </body>
</html>

