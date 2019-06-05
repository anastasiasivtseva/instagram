<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>qwerty</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<div class="col-4 mx-auto">
		<h4>Регистрация</h4>
		<form method="POST" action="mail.php">
		  	<div class="form-group">
		    	<label for="exampleInputEmail1">Адрес вашей почты</label>
		    	<input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		  	</div>
		  	<div class="form-group">
		    	<label for="exampleInputEmail1">Ваше Имя</label>
		    	<input name="name" class="form-control" placeholder="Enter your name">
		  	</div>
		  	<div class="form-group">
		    	<label for="exampleInputEmail1">Придумайте логин</label>
		    	<input name="login" class="form-control" placeholder="Enter login">
		  	</div>
		  	<div class="form-group">
			    <label for="exampleFormControlSelect1">Выберите аватар</label>
			    <select name="avatar" class="form-control" id="exampleFormControlSelect1">
				    <option>pic/1.jpeg</option>
				    <option>pic/2.png</option>
				    <option>pic/3.jpeg</option>
				    <option>pic/4.jpeg</option>
				    <option>pic/5.jpeg</option>
				    <option>pic/6.jpeg</option>
			    </select>
			</div>
		  	<div class="form-group">
		    	<label for="exampleInputPassword1">Придумайте пароль</label>
		    	<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  	</div>
		  	<button type="submit" class="btn btn-primary">ok</button>
		  	<div style="display: flex">
		  		<p>Вы уже зарегестрированы?</p>
		  		<a href="a1.php">Нажмите сюда</a>
		  	</div>
		</form>
	</div>
</body>
</html>