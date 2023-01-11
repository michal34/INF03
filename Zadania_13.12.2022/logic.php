<?php

function connect() {
    $link = mysqli_connect("localhost", "root", "", "crud");

    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }
    return $link;
}

function close_db($link) {
    mysqli_close($link);
}

function insert_sportman($name, $surname, $age, $sport, $medals_won){
    $link = connect();
    $query = "INSERT INTO sportman (name, surname, age, sport, medals_won) VALUES ('$name', '$surname', '$age', '$sport', '$medals_won')";
    if (mysqli_query($link, $query)) {
        echo "<script>alert('Record created successfully')</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
    close_db($link);

    echo '<script>window.location.href = "Zadanie3.php";</script>';
}

function update_sportman($id, $newName, $newSurname, $newAge, $newSport, $newMedals_won){
    $link = connect();
    $newName = $_POST["new_name"];
    $newSurname = $_POST["new_surname"];
    $newAge = $_POST["new_age"];
    $newSport = $_POST["new_sport"];
    $newMedals_won = $_POST["new_medals_won"];

    $query = "UPDATE sportman SET name = '$newName', surname = '$newSurname', age = '$newAge', sport = '$newSport', medals_won = '$newMedals_won' WHERE id = $id";

    if (mysqli_query($link, $query)) {
        echo "<script>alert('Record updated successfully')</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
    close_db($link);

    echo '<script>window.location.href = "Zadanie3.php";</script>';
}

function get_sportmans(){
    $link = connect();
    function deleteSportman($id, $link){
        echo("deleteSportman" . $id);
        $query = "DELETE FROM sportman WHERE id = $id";
        if (mysqli_query($link, $query)) {
            echo "<script>alert('Record deleted successfully')</script>";
        } else {
            echo "Error deleting record: " . mysqli_error($link);
        }
    }

    if (isset($_GET['deleteid'])) {
        deleteSportman($_GET['deleteid'],  $link);
    }

    $query = "SELECT * FROM sportman";

    if ($result = mysqli_query($link, $query)) {
        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['surname'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['sport'] . "</td>";
                echo "<td>" . $row['medals_won'] . "</td>";
                echo "<td><a style='display: inline-block' href='zadanie3.php?deleteid=" . $row['id'] ."'>Delete</a></td>";
                echo "</tr>";
            }
        }
    }
    close_db($link);
}
?>