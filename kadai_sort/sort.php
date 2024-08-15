<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
   
    function sort_2way($array, $order) {
      if ($order) {
        // 条件が成り立つ時→TRUEなら昇順
        sort($array);
      } else {
        // 条件が成り立たない時→TRUEじゃない時、FALSEなら降順
        rsort($array);
      }
      // ソートされた配列を戻り値として返す
      return $array;
    }

    $nums = [15, 4, 18, 23, 10 ];

    echo "昇順にソートします。<br>";
    $sort_nums = sort_2way($nums, true); //TRUEならsort
    foreach ($sort_nums as $num) {       //配列の各要素を順番に処理
      echo $num . "<br>";
    }

    echo "<br>";

    echo "降順にソートします。<br>";
    $sort_nums = sort_2way($nums, false); //FALSEならrsort
    foreach ($sort_nums as $num) {
      echo $num . "<br>";
    }
    ?>
  </p>
</body>

</html>