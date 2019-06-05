<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>authorization</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<div class="col-4 mx-auto border">
		<form action="a2.php" method="POST">
			<div class="form-group">
		    	<label for="exampleInputEmail1">Ваш mail</label>
		    	<input name="mail" class="form-control" placeholder="mail">
		  	</div>
		  	<div class="form-group">
		    	<label for="exampleInputPassword1">Ваш пароль</label>
		    	<input name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  	</div>
		  	<button type="submit" class="btn btn-primary">Ok</button>
		</form>
		<div style="display: flex">
		  		<p>Еще не зарегестрированы?</p>
		  		<a href="inst.php">Нажмите сюда</a>
		  	</div>
		<?php echo $_GET['text'] ?>
	</div>
</body>
</html>