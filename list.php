

<!DOCTYPE html>
<html>
<head>
	<title>Список загруженных файлов</title>
</head>
<body>
<h1>Доступные тесты</h1>
<p>Чтобы выбрать тест вводим: /test.php?testnumber=x.json</p>
<p>где x -имя теста</p>
<p><a href="admin.php">Вернуться на главную</a></p>
<?php
$directory = 'test/';
$scanned_directory = array_diff(scandir($directory), array('..', '.'));
?>
<?php foreach ($scanned_directory as $key => $value) {
 echo "<p>$value</p>";

 
}
?>
</form>
</body>
</html>