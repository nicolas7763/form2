<?php
header ('Content-Type: image/png');
$im = @imagecreatetruecolor(120, 20)
      or die('Невозможно инициализировать GD поток');
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  'Простая Текстовая Строка', $text_color);
imagepng($im);
imagedestroy($im);
?>