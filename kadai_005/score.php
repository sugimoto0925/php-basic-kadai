<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // 生徒10人分の点数を入れる変数score1〜score10を作成
    $score1 = 80;
    $score2 = 60;
    $score3 = 55;
    $score4 = 40;
    $score5 = 100;
    $score6 = 25;
    $score7 = 80;
    $score8 = 95;
    $score9 = 30;
    $score10 = 60;

    // 合計点の計算
    $total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
    // 合計点の表示
    echo '合計点' . $total;

    echo '<br>';

    // 平均点の計算
    $average = $total / 10;
    // 平均点の表示
    echo '平均点' . $average;
    ?>
  </p>
</body>