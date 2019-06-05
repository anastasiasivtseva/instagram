<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'nastya');
	$query = mysqli_query($con, "INSERT INTO posts(text, img, user_id) VALUES ('". $_POST['text'] . "', 'img/". $_FILES['img']['name'] ."' , '". $_POST['user_id'] ."') ");
	move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $_FILES['img']['name']);
	header('Location: http://aa/ig/posts.php?id='.$_POST['user_id']);
?>