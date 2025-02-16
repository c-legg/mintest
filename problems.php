<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>MinTest 题库</title>
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

                <h1 style="text-align: center;">题目列表</h1>

                <table style="border:1px solid #98bf21; width: 100%;">

                    <thead>
                        <tr style="height: 40px;  background-color:#A7C942; color:#ffffff;">
                            <th style="text-align: left; width: 17%; padding-left: 20px;">题目编号</th>
                            <th style="text-align: left; width: 73%; padding-left: 20px;">题目</th>
                            <th style="text-align: center;">难度</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        for ($i = 1; file_exists("./p/" . strval($i)); $i++) {
                            $pro = fopen("./p/" . strval($i) . "/" . "inf.json", "r");
                            $json = "";
                            while (!feof($pro)) {
                                $json = $json . fgets($pro);
                            }
                            $name = json_decode($json, true)["name"];
                            $sdiff = json_decode($json, true)["diff"];
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
                            if (($i + 1) & 1)
                                $back_col = "#EAF2D3";
                            else
                                $back_col = "#FFFFFF";
                            echo <<<EOF
                                <tr style="height: 30px; background-color: $back_col">
                                    <th style="text-align: left; width: 17%; padding-left: 20px;">P$i</th>
                                    <th style="text-align: left; width: 73%; padding-left: 20px;">
                                        <a href="./p.php?id=$i">$name</a>
                                    </th>
                                    <th style="text-align: center;"><b style="color: $dif_col;">$diff</b></th>
                                </tr>
                            EOF;
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <footer>
                <p style="width: 95%; color: white; text-align: right;">2025 © MinTest Team. All rights reserved.</p>
            </footer>
        </div>
    </div>

</body>

</html>