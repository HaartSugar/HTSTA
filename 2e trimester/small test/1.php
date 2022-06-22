<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <p>username:</p>
        <input name="UsersName">

        <button type="submit">login</button>
    </form>
    <?php
    if (isset($_POST["UsersName"])) {
        $host = "localhost";
        $user = "root";

        $psw = "";

        $portNo = "3306";

        $database = "promos";



        $connection = new mysqli($host, $user, $psw, $database, $portNo);

        $sqlInsert = $connection->prepare("SELECT UsrName,Money FROM PPL where UsrName=?");

        $sqlInsert->bind_param("s", $_POST["UsersName"]);

        $sqlInsert->execute();

        $result = $sqlInsert->get_result();

        $flaguserfound = false;

        if ($row = $result->fetch_assoc()) {

            print("welcome");

            $flaguserfound = true;

            $_SESSION["login"] = true;
        }

        if ($flaguserfound == false)

            die("invalid username");
    }
    ?>
    </form>
</body>

</html>