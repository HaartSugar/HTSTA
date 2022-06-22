<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> User Sign Up</h1>
    <p>FILL UP!!</p>

    <?php
    if (isset($_POST["UserName"], $_POST["Psw"], $_POST["Psw2"])) {
        if ($_POST["Psw"] == $_POST["Psw2"]) {
            $host = "localhost";
            $user = "root";
            $psw = "";
            $portNo = "3306";
            $database = "Shop";



            $connction = new mysqli($host, $user, $psw, $database, $portNo);
            mysqli_report(MYSQLI_REPORT_OFF);
            $sqlInsert = $connction->prepare("INSERT INTO USERS(UserName,UserPassword) Value(?,?)");
            $sqlInsert->bind_param("ss", $_POST["UserName"], $_POST["Psw"]);

            if (!$sqlInsert->execute()) {
                print("User already existes");
            } else {
                print("willkonmen u r in thr database");
            }
        } else {
            print("Password don't match");
        }
    }
    ?>

    <form method="POST">
        <input type="text" name="UserName" placeholder="UserName">
        <input type="password" name="Psw" placeholder="Password">
        <input type="password" name="Psw2" placeholder="Rewrite Password">
        <input type="submit" name="Go" id="Register">
    </form>
</body>

</html>