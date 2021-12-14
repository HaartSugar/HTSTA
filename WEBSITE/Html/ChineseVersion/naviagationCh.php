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
                <a <?php  if ($activePage == "HomeC") {
                        print("class='active'");
                    } ?> href="./HomeC.php">首页</a>
                <a <?php  if ($activePage == "ContactC") {
                        print("class='active'");
                    } ?> href="./ContactC.php">联系</a>
                <a <?php  if ($activePage == "ProductsC") {
                        print("class='active'");
                    } ?> href="./ProductsC.php">产品</a>
                <a <?php  if ($activePage == "AboutC") {
                        print("class='active'");
                    } ?> href="./AboutC.php">关于</a>
            </nav>
            <div class="dropdown">
                <a href="../ChineseVersion/ProductsC.php">中文</a>
                <div class="dropdown-content">
                    <a href="../EnglishVersion/Home.php">English</a>
                </div>
            </div>
        </div>
    </header>
<?php
}

?>