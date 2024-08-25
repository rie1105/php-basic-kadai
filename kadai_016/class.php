<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP16章課題</title>
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
            public function show_price() {
                echo  '<br>' . $this->price;
            }
        }

        // インスタンス化する
        $food = new Food('おにぎり', 185);

        // インスタンス$foodの各プロパティの値を出力する
        print_r($food);

        // メソッドにアクセスして実行する
        $food->show_price();    
        ?>
    </p>
    <p>
        <?php
        // クラスを定義する
        class Animal {
            // プロパティを定義する
            private $name;
            private $hight;
            private $weight;

            // コンストラクタを定義する
            public function __construct(string $name, int $hight, int $weight) {
                $this->name = $name;
                $this->hight = $hight;
                $this->weight = $weight;
            }
             // メソッドを定義する
             public function show_hight() {
                echo  '<br>' . $this->hight;
            }
        }

            // インスタンス化する
            $animal = new Animal('しろくま', 2500, 4500);
    
            // インスタンス$foodの各プロパティの値を出力する
            print_r($animal);
    
            // メソッドにアクセスして実行する
            $animal->show_hight(); 
        ?>
    </p>
</body>

</html>