<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Numer w dzienniku</label>
        <input name="numer" type="number"/>

        <label>Kategoria ocen</label>
        <select name="kategoria">
            <option value="aktywność">aktywność</option>
            <option value="kartkówka">kartkówka</option>
            <option value="sprawdzian">sprawdzian</option>
        </select>

        <label>
            Potwierdz wstawienie danych
        </label>
        <input type="checkbox" required="true" />
        
        <input type="submit" />
        <input type="reset" />
    </form>
    <?php 
        if ($_POST)
        {
            $numer = (int) $_POST["numer"];
            $kategoria = $_POST["kategoria"];
            $id_kategorii = 0;
            $ocena = rand(1, 6);
            
            if ($numer <= 0) {
                echo("<script>alert('Numer w dzienniku nie może być mniejszy od 1')</script>");
            } else {      
                $link = mysqli_connect("127.0.0.1", "root", "", "zadanie");
                
                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                
                if ($kategoria === "aktywność"){
                    $id_kategorii = 1;
                } elseif ($kategoria === "kartkówka") {
                    $id_kategorii = 2;
                } elseif ($kategoria === "sprawdzian") {
                    $id_kategorii = 3;
                }
                
                $query = "INSERT INTO Oceny (Ocena, Kategoria_oceny, Data_dodania, Numer_w_dzienniku) VALUES ('$ocena', '$id_kategorii', NOW(), $numer)";
                
                if(mysqli_query($link, $query)) {
                    echo("<script>alert('Dodano ocenę')</script>");
                }
                
                mysqli_close($link);
            }
        }
    ?>
</body>
</html>