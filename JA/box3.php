<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            height: 50px;
            width: 50px;
            margin: 10px;
        }
    </style>
</head>

<body>
    <?php
    $data = ["1" => "blue", "2" => "red", "3" => "yellow"];
    if (isset($_GET["colorChoice"], $_GET["NoBoxes"])) {
        if (is_numeric($_GET["NoBoxes"]) && (isset($data[$_GET["colorChoice"]]))) {
            for ($i = 0; $i < $_GET["NoBoxes"]; $i++) {
    ?>
                <div class="box" style="background-color: <?= $data[$_GET["colorChoice"]]; ?>"></div>
        <?php
            }
        } else {
            print "NOPE";
        }
        //print "I will give u boxes";
    } else {

        ?>
        <form>
            <div>
                <p>Please choose the box color: </p>
                <select name="colorChoice">
                    <?php
                    foreach ($data as $key => $value) {

                    ?>
                        <option value="<?= $key ?>"> <?= $value ?> </option>
                    <?php
                    }
                    ?>
                </select>
                <div>
                    <p>Please write how many boxes do u nedd:</p>
                    <input name="NoBoxes">
                    <input type="Submit">
                </div>
            </div>
        </form>
    <?php
    }
    ?>
</body>

</html>