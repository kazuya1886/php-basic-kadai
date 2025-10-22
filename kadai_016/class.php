<!DOCTYPE html>
<html lang="ja">
   
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
      }
      public function set_name(string $name){
        $this->name = $name;
      }
      public function show_name(){
        echo $this->price . '<br>';
      }
    }
     class Animal{
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      public function set_height(string $height){
        $this->height = $height;
      }
      public function show_height(){
        echo $this->height . '<br>';
      }
     }
  $food = new Food('potato',250);
  $animal = new Animal('dog',60,5000);
  print_r($food);
  echo '<br>';
  print_r($animal);
  echo '<br>';
  $food->show_name();
  $animal->show_height();
  ?>
  </p>
  </body>
</html>