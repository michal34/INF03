<?php
    $link = new mysqli("127.0.0.1", "root", "", "baza");

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
     
    echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

    $data = $_POST["data"];
    $ilosc_osob = $_POST['ilosc_osob'];
    $numer_telefonu = $_POST['numer_telefonu'];
     
    $sql = "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES ('$data', '$ilosc_osob', '$numer_telefonu')";
    if(mysqli_query($link, $sql)){  
        echo '<script>alert("Rezerwacja została złożona")</script>';
        header("refresh:0.01; url=restauracja.html");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
?>