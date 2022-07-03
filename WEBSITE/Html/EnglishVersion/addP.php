<?php 
if(isset($_POST["name"], $_POST["price"], $_POST["descEN"], $_POST["descCN"])){
    //insert into the product table
    $sqlStatement2 = $connection->prepare("SELECT * FROM Products natural join Descriptions where languagesID=1 AND ProductsID=?");
    $sqlStatement2->bind_param("s", $IDproduct);
    $sqlStatement2->execute();
    $result2 = $sqlStatement2->get_result();

    $row = $result2->fetch_assoc();

    $totalOrder = $totalOrder + ($row["ProductsPrice"] * $quantity);
    //insert into desc table en posts

    //insert into desc table cn posts
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">

        <form class="well form-horizontal" method="post">
            <fieldset>

                <legend>
                    <center>
                        <h2><b>Create Product</b></h2>
                    </center>
                </legend><br>


                <div class="form-group">
                    <label class="col-md-4 control-label">Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <input name="name" placeholder="Name" class="form-control" type="text">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label">Price</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <input name="price" placeholder="Price" class="form-control" type="number">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-euro"></i></span>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label">Text for english</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <textarea placeholder="Text for english" class="form-control" name="descEN" cols="15" rows="5"></textarea>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label">Text for chinese</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <textarea placeholder="Text for chinese" class="form-control" name="descCN" cols="15" rows="5"></textarea>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCreate Product &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
    </div>
</body>

</html>