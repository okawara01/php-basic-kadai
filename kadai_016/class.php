<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // クラスを定義する
       class Food {
           // プロパティを定義する
           private $name;
           private $price;

            // コンストラクタを定義する
           public function __construct(string $name, int $price) {
              $this->name = $name;
              $this->price = $price;
        }

        // メソッドを定義する            
            public function show_name(string $name){
                 echo $this->name . '<br>';
            }

            public function show_price() {
                echo $this->price . '<br>';
            }           
       }

       $food = new Food('potato',250);
       print_r($food);
       ?>
   </p>
   <p>
        <?php
        // クラスを定義する
        class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;

             // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // メソッドを定義する
            public function show_name(string $name) {
                $this->name = $name;
            }
            public function show_height() {
                echo $this->height . '<br>';
            }           
        }

        // インスタンス化する
        $animal = new Animal('dog', 60, 5000);

        // インスタンス$animalの各プロパティの値を出力する
        print_r($animal);

       echo  '<br>';
       
        $potato = new Food('potato',250);
        $potato->show_price();

        $dog = new Animal('dog', 60, 5000);
        $dog->show_height();
        ?>

        
    </p>

</body>

</html>