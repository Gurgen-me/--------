<?
error_reporting(E_ALL);
ini_set("display_error", "on");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "root", "", "dtp");
if (!$link) {
    die();
}


$id = mysqli_real_escape_string($link, $_GET['id']);

$allArticle = "SELECT * FROM dtp_posts";
$resltAllArticle = mysqli_query($link, $allArticle) or die(mysqli_error($link));
for ($mass = []; $row = mysqli_fetch_assoc($resltAllArticle); $mass[] = $row);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../articlescss/stat.css">
    <link rel="icon" size="32x32" href="../img/icon.png">
    <title>CARNEWS</title>
</head>

<body>
    <header class="header">
        <a href="../index.php" class="logo">
            <img src="../img/logo.png" alt="logo">
        </a>
        <nav class="navbar">

            <a href="../pages/gibdd.php">ГИБДД</a>
            <a href="../pages/test.php">Тест-драйвы</a>
            <a href="../pages/dtp.php">ДТП</a>
            <a href="../pages/pdd.php">ПДД</a>
            <a href="../pages/kredit.php">Кредит</a>

        </nav>
        <div class="user"></div>
    </header>
    <div class="wrapper">
        <? foreach ($mass as $elem) { ?>
            <? if ($elem['id'] == $id) { ?>
                <h1 id="h1"><?= $elem["post_name"] ?></h1>
                <div class="bigimg">
                    <!-- <p class="cursor typewriter-animation"></p> -->
                    <img src="data:image/*;base64, <?= base64_encode($elem["image"]) ?>" alt="Mercedes-Benz amg gt 63 s" class="merc">
                </div>
                <div class="sparaying">
                    <p class="disc">
                        <?= $elem['post_disc'] ?>
                    </p>
                </div>
            <? } ?>
        <? } ?>
        <!-- footer -->
    </div>
    <? require_once "../pages/components/footer.php" ?>
    <script src="./js/script.js"></script>
</body>

</html>