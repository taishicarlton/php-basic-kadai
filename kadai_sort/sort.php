<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order){
          if ($order == true){
            echo '昇順にソートします。' . '<br>';
            sort($array);
          }else{
            echo'降順にソートします。' . '<br>';
            rsort($array);
          }
          foreach ($array as $val){
            echo $val . '<br>';
          }
        }
        
        $num = [15, 4, 18, 23, 10 ];

        sort_2way($num, true);
        sort_2way($num, false);
        ?>
    </p>
</body>

</html>
