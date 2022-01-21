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

        }

        .red {
            background-color: red;
        }

        .blue {
            background-color: blue;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET["BoxColoer"], $_GET["NumberOfBoxes"])) {
        if (is_numeric($_GET["NumberOfBoxes"])) {
            for ($i = 0; $i < $_GET["NumberOfBoxes"]; $i++) { ?>
                <div class="box"> </div>
    <?php
            }
        }
    }
    ?>
    <form>
        <select name="Boxcolor">
            <option value=0>Red</option>
            <option value=1>Blue</option>
        </select>
        <input name="NumberOfBoxes">
    </form>
</body>

</html>