<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>

<body>
    <p>
        <?php
        $yasai_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

        // 連想配列$personal_dataのキーと値を１つずつ順番に出力する
        foreach ($yasai_data as $key => $value){
            echo "{$key} : {$value}<br>";
        }
        ?>
    </p>
</body>

</html>