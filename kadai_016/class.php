<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    //クラスを定義する
    class Foot {
      //プロパティを定義する
      private $name;
      private $price;

      //メソッドを定義する
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
      public function show_price() {
        echo $this->price;
        echo '<br>';
      }
    }

    //クラスを定義する
    class Animal {
      //プロパティを定義する
      private $name;
      private $height;
      private $weight;

      //メソッドを定義する
      public function __construct(string $name, int $height, int $weight,) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      public function show_height() {
        echo $this->height;
      }
    }

      // インスタンス化する
      $foot = new Foot('potato', 250);

      // インスタンス$userの各プロパティの値を出力する
      print_r($foot);
      echo '<br>';

      // インスタンス化する
      $animal = new Animal('dog', 60, 5000);
         // インスタンス$userの各プロパティの値を出力する
      print_r($animal);
      echo '<br>';
      
      $foot->show_price();
      $animal->show_height();
      
    ?>  

  </p>

</body>
</html>