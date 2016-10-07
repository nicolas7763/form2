<?php

$ot = 0;
   $not = 0;
 
      if ($_POST['answer'] == 'a'){$ot++;} else {$not++;}
      if (isset($_POST['name'])&&!empty($_POST['name'])) {
      //var_dump($_POST['answer']);
      	$text1 = htmlspecialchars($_POST['name']);
      	$text = $text1 . ' поздравляем! Тест пройден!';
         //var_dump($text);
      if ($ot > $not) {
       require("image.php"); 
      }else{
      	echo $text1 ." Тест не пройден!";
           
    }  
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<img src ='image.php?text=<?= $text ?>'>
<p><a href="list.php">Попробовать снова!</a></p>
<p>Правильных ответов: <?php echo $ot; ?></p>
<p>Неправильных ответов: <?php echo $not; ?></p>

</body>
</html>