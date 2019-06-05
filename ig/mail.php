<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'nastya');

$query = mysqli_query($con, "INSERT INTO ig (mail, name, login, password, avatar) VALUES ('".$_POST['mail']."' , '".$_POST['name']."', '".$_POST['login']."', '".$_POST['password']."' , '".$_POST['avatar']."')");

mail($_POST['mail'], 'Регистрация в инстаграм', 'Ваш логин: ' . $_POST['login'] . ' Ваш пароль: ' . $_POST['password']);

header('Location: http://aa/ig/a1.php');
?>

