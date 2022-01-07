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
                for ($i = 0; $i < count($navText); $i++) {

                    if ($lang == "langEn") {
                        $Link = "../EnglishVersion/" . $Links[$i] . ".php";
                    } else {
                        $Link = "../ChineseVersion/" . $Links[$i] . "C.php";
                    }

                ?>

                    <a <?php
                    if ($activeLink==$i) {
                        print("class='active'");
                    }
                    ?> href="<?= $Link ?>"><?= $navText[$i] ?></a>
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