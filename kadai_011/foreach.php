<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
  
    <p>
      <?php
      $onion_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

      // キーと値を持つ連想配列を作成し、変数に代入します。
      foreach ($onion_data as $key => $value) {
        echo "{$key}:{$value}<br>";
      }
      ?>
    </p>

    <p>
      <?php
      $user_data = ['id' => 1, '名前' => '侍太郎', '年齢' => 30];

      // foreach文とecho文を使いブラウザに要素それぞれのキーと値を出力します。
      foreach ($user_data as $key => $value) {
        echo "{$key}:{$value}<br>";
      }
      ?>
    </p>
      
</body>

</html>