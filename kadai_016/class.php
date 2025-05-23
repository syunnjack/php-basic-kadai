<?php
// Food クラス定義
class Food {
  public $name;
  public $price;

  // コンストラクタ
  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
  }

  // priceを出力するメソッド
  public function show_price() {
    echo "価格は {$this->price} 円です。<br>";
  }
}

// Animal クラス定義
class Animal {
  public $name;
  public $height;
  public $weight;

  // コンストラクタ
  public function __construct($name, $height, $weight) {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }

  // heightを出力するメソッド
  public function show_height() {
    echo "身長は {$this->height} cm です。<br>";
  }
}

// Step3: インスタンス生成と出力
$food = new Food("りんご", 150);
$animal = new Animal("キリン", 500, 900);

// インスタンスの中身を出力
echo "<pre>";
print_r($food);
print_r($animal);
echo "</pre>";

// Step4: メソッド実行
$food->show_price();
$animal->show_height();
?>
