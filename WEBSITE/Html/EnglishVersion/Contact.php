<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Contact</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../Stlying/MyCssCode.css?t<?=time(); ?>'>
    <script src='main.js'></script>
</head>

<body>

    <?php
    include_once("naviagation.php");
    navbar("Contact");
    ?>
    <div class="banner-area">
        <h2>Pandora Box</h2>
    </div>
    <div class="content-area">
        <div>
            <h2>Contact Us</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <form action="Home.html" id="ContactUs">
            <label>First Name</label>
            <input type="text" placeholder="Your name..">
            <label>Last Name</label>
            <input type="text" placeholder="Your last name..">
            <label>Country</label>
            <select>
                <option>Australia</option>
                <option>Canada</option>
                <option>USA</option>
            </select>
            <label>Birthday</label>
            <input type="date">
            <input type="submit" value="Submit" id="submit">
        </form>
        <img src="../../Images/Contact/stock-photo-1001503522.jpg" alt="sss">
    </div>

</body>

</html>