<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'nastya');

	$que = mysqli_query($con, "SELECT * FROM ig WHERE mail = '" . $_POST['mail'] . "' AND password = '" . $_POST['password'] . "' ");
	$result = $que->fetch_assoc();

	if($result['mail'] == $_POST['mail'] && $result['password'] == $_POST['password']){;
		header('Location:http://aa/ig/posts.php?id='.$result['id']);
	}else{
		header('Location:http://aa/ig/a1.php?text=Неправильный логин или пароль!');
	};
?>