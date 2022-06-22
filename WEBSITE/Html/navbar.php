<?php
function navbar($navText, $Links, $lang, $activeLink)
{


?>


    <header>
        <div class="wrapper">
            <div class="logo">
                <h1>SPL</h1>
            </div>
            <nav>
                <?php
                if($_SESSION['userLoggedIn']){
                    $lastA = count($navText) -2;
                }else{
                    $lastA = count($navText);
                }
                
                for ($i = 0; $i < $lastA; $i++) {


                    if ($lang == "langEn") {
                        $Link = "../EnglishVersion/" . $Links[$i] . ".php";
                    } else {
                        $Link = "../ChineseVersion/" . $Links[$i] . "C.php";
                    }

                ?>

                    <a <?php
                        if ($activeLink == $i) {
                            print("class='active'");
                        }
                        ?> href="<?= $Link ?>"><?= $navText[$i] ?></a>
                <?php
                }
                ?>

                <?php
                if ($_SESSION['userLoggedIn']) {
                ?>
                    <form method="POST" hidden id="LogoutForm">
                        <input type="text" name="LOGOUT">
                    </form>
                    <a onclick="document.getElementById('LogoutForm').submit();" href="#">Logout</a>
                <?php
                }
                ?>


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