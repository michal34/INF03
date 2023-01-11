<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <div style="width: 100%; display: flex; justify-content: space-evenly;">
        <div>
            <div style="width: 300px;">
                <h2>Add sportsman</h2>
                <form action="" method="POST" style="flex-direction: column; display: flex; justify-content: center; text-align:center;">
                    <label for="name">Enter name</label>
                    <input name="name" type="text" id="name" required="true" />

                    <label for="surname">Enter surname</label>
                    <input name="surname" type="text" id="surname" required="true" />

                    <label for="age">Enter age</label>
                    <input name="age" type="number" id="age" required="true" />

                    <label for="sport">Enter sport</label>
                    <input name="sport" type="text" id="sport" required="true" />

                    <label for="medals_won">Enter the amount of medals won</label>
                    <input name="medals_won" type="number" id="medals_won" required="true" />

                    <input type="submit" value="Add" />
                    <input type="reset" />
                </form>
            </div>

            <div style="width: 300px; margin-top: 50px;">
                <h2>Update sportsman</h2>
                <form action="" method="POST" style="flex-direction: column; display: flex; justify-content: center; text-align:center;">
                    <label for="id">Enter ID</label>
                    <input name="id" type="number" id="id" required="true" />

                    <label for="new_name">Enter new name</label>
                    <input name="new_name" type="text" id="new_name" required="true" />

                    <label for="new_surname">Enter new surname</label>
                    <input name="new_surname" type="text" id="new_surname" required="true" />

                    <label for="new_age">Enter new age</label>
                    <input name="new_age" type="number" id="new_age" required="true" />

                    <label for="new_sport">Enter new sport</label>
                    <input name="new_sport" type="text" id="new_sport" required="true" />

                    <label for="new_medals_won">Enter new the amount of medals won</label>
                    <input name="new_medals_won" type="number" id="new_medals_won" required="true" />

                    <input type="submit" value="Update" />
                    <input type="reset" />
                </form>
            </div>
        </div>

        <div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Age</th>
                    <th>Sport</th>
                    <th>Medals won</th>
                </tr>
                <style>
                    td {
                        text-align: center;
                    }
                </style>
                <?php
                      include_once 'logic.php';
                      get_sportmans();
                ?>
            </table>
        </div>
    </div>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["age"]) && isset($_POST["sport"]) && isset($_POST["medals_won"]) 
        && $_POST["name"] != "" && $_POST["surname"] != "" && $_POST["age"] != "" && $_POST["sport"] != "" && $_POST["medals_won"] != "")
        {
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $age = $_POST["age"];
            $sport = $_POST["sport"];
            $medals_won = $_POST["medals_won"];

            insert_sportman($name, $surname, $age, $sport, $medals_won);
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["id"]) && isset($_POST["new_name"]) && isset($_POST["new_surname"]) && isset($_POST["new_age"]) && isset($_POST["new_sport"]) 
        && isset($_POST["new_medals_won"]) && $_POST["id"] != "" && $_POST["new_name"] != "" && $_POST["new_surname"] != "" && $_POST["new_age"] != "")
        {
            $id = $_POST["id"];
            $new_name = $_POST["new_name"];
            $new_surname = $_POST["new_surname"];
            $new_age = $_POST["new_age"];
            $new_sport = $_POST["new_sport"];
            $new_medals_won = $_POST["new_medals_won"];

            update_sportman($id, $new_name, $new_surname, $new_age, $new_sport, $new_medals_won);
        }
    ?>
       
</body>
</html>