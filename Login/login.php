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
        <fieldset>
            <legend>Login</legend>
            <ul>
                <li>
                    <label>Username:</label>
                    <input type="text" name="username">
                </li>
                <li>
                    <label>Password</label>
                    <input type="password" name="password0">
                </li>
                
                <button type="submit" name="login">
                    Login
                </button>
            </ul>
        </fieldset>   
    </form>
    <?php
    if (isset($_POST['username'],$_POST['password0'])) {
        $myfile = "data.txt";
        $userExist= fopen($myfile,"r");
        $username = false;
            while (($userGet =fgets($userExist))) {

                $userNameandPass = explode(" ",$userGet);
                    if ($_POST["username"] == $userNameandPass[0] && trim($_POST["password0"]) == trim($userNameandPass[1])) {
                        $username=true;
                        print("Welcome ".$userNameandPass[0]);
                    }
                
                    
                            
            }
            if ($username==false) {
                print("pas or name it's wrong");
            }
                fclose($userExist);
    }
    ?>

</form>
</body>
</html>