<!DOCTYPE html>
<html>

<?php
if (empty($_GET["id"])) {
    die("未输入题号");
}
if (!file_exists("./p/" . $_GET["id"] . "/" . "inf.json")) {
    die("题目不存在");
}
$id = $_GET["id"];
$pro = fopen("./p/" . $_GET["id"] . "/" . "inf.json", "r");
$json = "";
while (!feof($pro)) {
    $json = $json . fgets($pro);
}
$arr_json = json_decode($json, true);
$name = $arr_json["name"];
$sdiff = $arr_json["diff"];
if ($sdiff == 1) {
    $diff = "Easy-";
    $dif_col = "#ff4d4d";
} else if ($sdiff == 2) {
    $diff = "Easy";
    $dif_col = "#ff8533";
} else if ($sdiff == 3) {
    $diff = "Easy+/Mid-";
    $dif_col = "#e6d305";
} else if ($sdiff == 4) {
    $diff = "Mid";
    $dif_col = "#39e600";
} else if ($sdiff == 5) {
    $diff = "Mid+/Hard-";
    $dif_col = "#00aaff";
} else if ($sdiff == 6) {
    $diff = "Hard";
    $dif_col = "#5ae2e2";
} else if ($sdiff == 7) {
    $diff = "Hard+";
    $dif_col = "#b700e6";
} else if ($sdiff == 0) {
    $diff = "Unknown";
    $dif_col = "#000066";
}
$timel = $arr_json["timel"];
$morml = $arr_json["morml"];
?>

<head>
    <meta charset="UTF-8">
    <title>P<?php echo $_GET["id"]; ?> <?php echo $name; ?></title>
    <link rel="icon" type="image/svg" href="icon.svg">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>

<body style="background: #E5FEFF;">
    <div class="page">

        <table class="nav">
            <thead>
                <td><a href="./index.php"><img src="icon.svg" alt="Icon" height="50"></a></td>
                <td><b><a href="./problems.php">📖 题库</a></b></td>
                <td><b><a href="./contests.php">🥇 比赛</a></b></td>
                <td><b><a href="./discuss.php">👋 讨论</a></b></td>
                <td><b><a href="./record.php">📅 提交</a></b></td>
                <td><b><a href="./account.php">💻 账户</a></b></td>
            </thead>
        </table>

        <div class="main-page">

            <div class="main-text">

                <h1 style="text-align: center;">P<?php echo $_GET["id"]; ?> <?php echo $name; ?></h1>

                <p style="text-align: center;">
                    <?php
                    echo <<<EOF
                        时间限制：$timel ms<br>空间限制：$morml MB<br>难度：<b style="color: $dif_col;">$diff</b>
                    EOF;
                    ?>
                </p>

                <p><?php echo iconv('GBK', 'UTF-8', shell_exec("python mark.py ./p/" . $_GET["id"] . "/" . "p.md")); ?>
                </p>
            </div>

            <footer>
                <p style="width: 95%; color: white; text-align: right;">2025 © MinTest Team. All rights reserved.</p>
            </footer>
        </div>
    </div>

</body>

</html>