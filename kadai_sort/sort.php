<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10];
        function sort_2way($array,$order){
          
        
          if ($array){
              echo'昇順にしました<br>';
              sort ($order);
              foreach($order as $num){
              echo"{$num}<br>";
            }
          } else{
            echo '降順にしました<br>';
             rsort ($order);
            foreach($order as $num){  
            echo"{$num}<br>";
            }
          }
        } 
          
        
         sort_2way (true, $nums);
         sort_2way (false, $nums);
        ?>
    </p>
</body>

</html>