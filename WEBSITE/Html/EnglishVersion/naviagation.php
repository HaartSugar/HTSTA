<?php
function navbar($activePage)
{


?>


<header>
    <div class="wrapper">
        <div class="logo">
            <h1>SPL</h1>
        </div>
        <nav>
            <a <?php if ($activePage=="Home") {print("class='active'");}?>href="./Home.php">Home</a>
            <a <?php if ($activePage=="Contact") {print("class='active'");}?>href="./Contact.php">Contact</a>
            <a <?php if ($activePage=="Products") {print("class='active'");}?>href="./Products.php">Products</a>
            <a <?php if ($activePage=="About") {print("class='active'");}?>href="./About.php">About</a>
        </nav>
        <div class="dropdown">
            <a href="../EnglishVersion/Home.php">English</a>
            <div class="dropdown-content">
                <a href="../ChineseVersion/HomeC.php">中文</a>
            </div>
        </div>
    </div>
</header>

<?php
}
?>