<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            width: 100px;
            height: 100px;
        }

        .redline {
            background-color: red;
        }

        .blueline {
            background-color: blue;
        }

        th {
            background-color: Green;
        }

        table,
        tr,
        th,
        td {
            border: 1px solid black;
        }

        th {
            background-color: burlywood;
        }

        table,
        th,
        td,
        tr {
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <h2>5/10/2021</h2>
    <?php
    $colorofdiv = "redline";
    $blue = "blueline";
    $numberofboxes = 50;
    for ($i = 0; $i < $numberofboxes; $i++) {
        if ($i % 3 == 0) { ?>
            <div class='box <?= $blue; ?>'>This is box number: <?= ($i) ?> </div>
        <?php } else { ?>


            <div class='box <?= $colorofdiv; ?>'>This is box number: <?= ($i) ?> </div>
    <?php
        }
    }
    ?>
    <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <h2>8/10/2021</h2>
    <?php
    $opt1 = 'Audi';
    $opt2 = 'Mercedes';
    $opt3 = 'Volkswagen';
    $opt4 = 'Bayerische Motoren Werke';
    $opt5 = 'Porsche';
    $myarray = ['Audi', 'Mercedes', 'Volkswagen', 'Bayerische Motoren Werke', 'Porsche'];

    ?>
    <select>
        <?php
        for ($i = 0; $i < count($myarray); $i++) {
            //for($i=count($myarray)-1;$i>=0;$i--){

            $currentselectedoption = 2;
        ?>
            <option <?php if ($i == $currentselectedoption) {
                        print("selected");
                    }; ?> value="<?= $i ?>"><?= $myarray[$i]; ?></option>
        <?php
        }
        ?>
    </select>
    <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <h2>12/10/2021</h2>
    <?php
    $cars = ["Toyota", "Dacia", "Nissan"];
    var_dump($cars);
    print("<br>");

    array_push($cars, "Mazda", "Bayerische Motoren Werke", "Tesla");
    var_dump($cars);
    print("<br>");

    array_pop($cars);
    array_pop($cars);
    var_dump($cars);
    print("<br>");

    array_shift($cars);
    array_shift($cars);
    var_dump($cars);
    print("<br>");
    ?>
    <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <?php
    $numbers = array();
    for ($i = 1; $i < 101; $i++) {
        array_push($numbers, $i);
    }
    var_dump($numbers)
    ?>
    <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <?php
    $numbers = array();
    for ($i = 1; $i < 101; $i++) {
        if ($i % 5 != 0) {
            array_push($numbers, $i);
        }
    }
    var_dump($numbers)
    ?>
    <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <?php
    $numbers = array();
    for ($i = 1; $i < 101; $i++) {
        if ($i % 5 == 0) {
            array_push($numbers, $i);
        }
    }
    var_dump($numbers)
    ?>
    <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <?php
    $numbers = array();
    for ($i = 1; $i < 101; $i++) {
        if ($i % 5 != 0) {
            array_push($numbers, $i);
        } else {
            array_unshift($numbers, $i);
        }
    }
    var_dump($numbers)
    ?>
    <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <h2>14/10/2021</h2>
    <?php
    $grade = 55.95;
    $integergrade = (int) $grade;
    print($grade);
    print("<br>");
    print($integergrade);
    ?>
    <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <?php
    $number = 14567;
    $digits = [];
    for ($i = 0; $i < 5; $i++) {
        $lastdigit = (int)$number % 10;
        $newnumber = (int)$number - $lastdigit;
        $newnumber = (int)$newnumber / 10;
        $number = $newnumber;
        array_unshift($digits, $lastdigit);
    }
    var_dump($digits);
    ?>
    <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <h2>19/10/2021</h2>
    <table>
        <tr>
            <th>Company</th>
            <th>Prices</th>
        </tr>
        <?php
        $foreacharray = ["Dacia " => "10.000 ", "Mercedes " => "50.000 ", "Ford" => "30.000 ", "BMW" => "45.000 ", "Audi " => "90.000 ", "VW" => "10.000"];
        foreach ($foreacharray as $key => $value) { ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $value ?></td>
            </tr>
        <?php } ?>
    </table>
    <?php
    $Cost = ["Dacia" => 10000, "APPLE" => 20000, "BMW" => 30000];
    ?>
    <table>
        <tr>
            <th>Car Manufa</th>
            <th>Price</th>
        </tr>

        <?php
        foreach ($Cost as $key => $value) {
        ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $value ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <h2>22/10/2021</h2>

    <form action="readData.php">
        <p>YOUR NAME:</p>
        <input name="UserName">
        <input name="Password" type="Password">
        <button type="submit">GIVE DATA</button>
    </form>
    <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <h2>28/10/2021</h2>


    <?php
    if (!empty($_GET["Car"])) {
        print $_GET["Car"];
    } else {
        print("Please fill in the form");

    ?>
        <form>
            <input name="Car">
            <input type="Submit">
        </form>
    <?php
    }
    ?>




    <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <h2>29/10/2021</h2>


    <?php
    $data = [
        "1" => "Dacia",
        "2" => "APPLE",
        "3" => "BMW"
    ];
    ?>
    <select name="CARSS">
        <?php
        foreach ($data as $key => $value) { ?>

            <option value="<?=$key;?>"> <?=$value;?> </option>
        <?php
        }
        ?>



    </select>

    <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <h2>09/11/2021</h2>
    <?php
    if (isset($_POST["UserName"],$_POST["Passwd"])) {

        //we will write our new user and password inside the data.txt
        $myfile = fopen("data.txt","a") or die("Unable to open the file!");
        fwrite($myfile,$_POST["UserName"]." ".$_POST["Passwd"]."/n");
        fclose($myfile);
    }
    ?>

    <form method="POST">
        GiveUserName <input name="UserName">
        GivePw<input name="Passwd">
        <input type="submit">
    </form>

</body>

</html>