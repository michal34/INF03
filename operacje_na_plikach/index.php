<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
# wykorzystując SO -> C/C++

// $file = fopen("jedyneczki.txt", "r");
// while( !feof($file)) {
//     echo(fgetc($file));
// }

// fclose($file);


// $fileContent = file_get_contents("jedyneczki.txt");
// echo(str_replace("\n", "<br>", $fileContent));

$json = file_get_contents("data.json");
$jsonData = json_decode($json, true);
// print_r($jsonData);
foreach($jsonData["zdający"] as $key) {
    echo("<li>" . $key . "</li>");
}

echo(json_encode($jsonData));

?>
</body>
</html>