<?php
$name = "localhost";
$user ="root";
$pwd = "";
$db = "forum";
$portNo=3306;
$connection= new mysqli($name,$user,$pwd,$db,$portNo);

//insert comments
$connection = mysqli_connect($name,$user,$pwd,$db);
if (isset($_POST['subBtn'])) {
    $name=$_POST['commName'];
    $text=$_POST['commText'];
    $insert = $connection->prepare("INSERT INTO comments(lis,li) VALUE (?,?)");
    $insert ->bind_param("ss",$name,$text);
    $insert->execute();
    header("Refresh:0");
    die();
}

//show comments

$commentrows=$connection->prepare("SELECT lis, li FROM comments ORDER BY CommentID ");
$commentrows->execute();
$resultComments=$commentrows->get_result();
while ($res2=$resultComments->fetch_assoc()) {
    ?>
    <div class="comment">
    <p class="user"> <?= $res2['lis'] ?>; </p>
    <p class="message"> <?= $res2['li'] ?>; </p>
    </div>
    <?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        .comment{
            height: 50px;
            width: 200px;
            background-color: red;
        }
        .comment:net-child(2n){
            height: 50px;
            width: 200px;
            background-color: yellow;
        }
    </style>
</head>
<body class="commenr-section">
    <div>
        <div class="comment">

        </div>
    </div>
<form action="" method="POST">
    <input type="text" value="name" name="commName">
    <input type="textArea" name="commText" value="Comment text">
    <input type="submit" value="send" name="subBtn">
</form>
</body>
</html>