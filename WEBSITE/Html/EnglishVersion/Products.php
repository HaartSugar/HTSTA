<?php
include_once("../START.PHP");

if (isset($_POST["buyID"], $_POST["quantityProduct"])) {

    if ($_SESSION['userLoggedIn']) {



        if (!is_numeric($_POST["buyID"])) {
            die();
        }

        if ($_POST["quantityProduct"] < 1 || $_POST["quantityProduct"] > 10) {
            die();
        }


        if (isset($_SESSION["shoppingCart"][$_POST["buyID"]])) {
            $_SESSION["shoppingCart"][$_POST["buyID"]] = $_SESSION["shoppingCart"][$_POST["buyID"]] + $_POST["quantityProduct"];
            //unset($_SESSION["shoppingCart"][$_POST["buyID"]]);
        } else {
            $_SESSION["shoppingCart"] += [$_POST["buyID"] => $_POST["quantityProduct"]];
        }
    } else {
        print "<script>alert('You are not logged in')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Products</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../Stlying/MyCssCode.css?t<?= time(); ?>'>

</head>

<body>
    <?php

    $sqlStatement = $connection->prepare("SELECT * FROM Products natural join Descriptions where languagesID=1");
    $sqlStatement->execute();
    $result = $sqlStatement->get_result();

    include_once("../navbar.php");
    navbar(["Home", "About", "Contact", "Products","shoppingCart", "Resister", "Login"], ["Home", "About", "Contact", "Products","shoppingCart", "Resister", "Login"], "langEn", 3);
    ?>
    <div class="box-area">

        <div class="banner-area">
            <h2>Pandora Box</h2>
        </div>
        <div class="content-area">
            <div>
                <h2>Our Products</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="allproducts">

                <?php



                $count = 0;
                while ($row = $result->fetch_assoc()) {
                    if ($count == 0) {
                ?>
                        <div class="Products">
                            <img src="../../Images/Products/<?= $row["ProductsImage"] ?>">
                            <p><?= $row['ProductsName'] ?></p>
                            <p><?= $row["ProductsPrice"] ?></p>
                            <p><?= $row["DescText"] ?></p>
                            <form method="POST">
                                <input type="hidden" value="<?= $row["ProductsID"] ?>" name="buyID">
                                <select name="quantityProduct">
                                    <?php
                                    for ($i = 1; $i <= 10; $i++) {
                                    ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php

                                    }
                                    ?>
                                </select>
                                <button type="submit">Buy</button>

                            </form>


                        </div>
                <?php
                    }
                }
                $count++;

                if ($count == 3) {

                    print("</div>");

                    $count = 0;
                }

                ?>

            </div>

        </div>
    </div>
</body>

</html>