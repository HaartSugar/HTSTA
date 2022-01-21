<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Register</legend>
            <ul>
                <li>
                    <label>Username:</label>
                    <input type="text" name="username">
                </li>
                <li>
                    <label>Password</label>
                    <input type="password" name="password0">
                </li>
                <li>
                    <label>RedoPassword</label>
                    <input type="password" name="password1">
                </li>
                <button type="submit" name="Register">
                    Register
                </button>
                
            </ul>
        </fieldset>   
    </form>
    <?php
    if (isset($_POST["username"],$_POST["password0"])) {
        if ($_POST["password0"]!=$_POST["password1"]) {
            print("Password isn't same");
            die();
        }
        $myfile = fopen("data.txt","r") or die("Unable to open the file!");
        while (($line = fgets($myfile))!== false) {
            $userNameandPass = explode(" ",$line);
            //print($userNameandPass[0]);
            if ($_POST["username"] == $userNameandPass[0]) {
                die("Invalid Username");
            }
        }
        fclose($myfile);
        $myfile = fopen("data.txt","a") or die("Unable to open the file!");
        
        fwrite($myfile,$_POST["username"]." ".$_POST["password0"]."\n");
        fclose($myfile);
    }
    ?>
</body>
</html>