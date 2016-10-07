<?php 
if (isset($_POST["send"])) {
	header("Location:list.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Тестовая камера</title>
</head>
<body>
<h1>В данный момент файлы тестов загружены</h1>
<h2>Для перехода к тестированию жмем кнопку "загрузить"</h2>

<?php
if (!empty($_FILES['userfile'])){
$uploaddir = 'test/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}
}
?>

<form enctype="multipart/form-data" action="" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="30000">
Отправить: <input name="userfile" type="file">
<input type="submit" name="send" value="Загрузить">

</form>
</body>
</html>