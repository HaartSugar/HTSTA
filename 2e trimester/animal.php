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
    $portNo = 3306;
    $dbName = "AnimasInsert";
    $connection = new mysqli($host, $user, $psw, $dbName, $portNo);

    if (isset($_POST["newAnimal"])) {
        //print "You want to insert a " . $_POST["newAnimal"] . " into de database";
        $sqlStatement=$connection->prepare("INSERT INTO Animals(AnimalName,Continent) Values(?,?)");
        $sqlStatement->bind_param("ss",$_POST["newAnimal"],$_POST["continentOfAnimal"]);  //S as String or I as Interger
        if ($sqlStatement->execute()) {
            print "We inserted the animal into the database<br>";
        } else {
            print "u did not <br>";
        }
        



        //$result=$sqlStatement->get_result();
        /*if ($result) {
            
        }else {
            
        }*/
    }


    $sqlStatement = $connection->prepare("SELECT * FROM animals");
    $sqlStatement->execute();
    $result = $sqlStatement->get_result();
    $numberOfAnimals = $result->num_rows;
    if ($numberOfAnimals == 0) {
        print "No Animals were found";
    } else {



        while ($row = $result->fetch_assoc()) {
            print $row["AnimalName"] . "  lives in ". $row["Continent"] ."<br>";
        }
    }

    ?>

    <form method="POST">
        <input name="newAnimal">

        <select name="continentOfAnimal">
            <option>Europe</option>
            <option>America</option>
            <option>Africa</option>
            <option>Asia</option>
            <option>Austrakia</option>

        </select>

        <input type="submit" value="GOOOOOO">
    </form>

    
</body>

</html>