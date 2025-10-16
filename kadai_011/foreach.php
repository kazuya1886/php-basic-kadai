<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTE-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    $deta = ['名前' =>'玉ねぎ', '値段' => 200, '産地' =>'北海道'];

   

    foreach ($deta as $index => $value){
       echo "{$index}:{$value}<br>";
    }
    ?>
 </P>
 </body>

 </html>
