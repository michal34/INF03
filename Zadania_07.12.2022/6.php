<?php
    $tablica = ["ff", "aa", "bb", "cc", "dd"];

    echo "<ol>";

    for ($i = 0; $i < count($tablica); $i++) {
        echo "<li>" . $tablica[$i] . "</li>";
    }

    echo "</ol>";
?>