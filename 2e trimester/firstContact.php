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
    $host = "localhost";
    $user = "root";
    $psw = "";
    $portNo = "3306";
    $database = "lis";



    $connction = new mysqli($host, $user, $psw, $database, $portNo);
    $sqlStatement = $connction->prepare("SELECT * from countries where CountryName LIKE 'L%'");
    if ($sqlStatement == false) {
        die("incorrect SQL Statement");
    }

    $sqlStatement->execute();

    $result = $sqlStatement->get_result();

    $rownum = $result->num_rows;

    if ($rownum != 0) {

    ?>



        <select>

            <?php

            while ($row = $result->fetch_assoc()) {

            ?>

                <option value="<?= $row["CountryId"]; ?>"><?= $row["CountryName"]; ?></option>

        <?php

            }
        } else {

            die("no rows");
        }

        ?>

        </select>
</body>

</html>