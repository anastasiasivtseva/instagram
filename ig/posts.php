<!DOCTYPE html>
<html>
<head>
	<title>lenta</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php 
		$connect = mysqli_connect('127.0.0.1','root','','nastya');
		$query = mysqli_query($connect,"SELECT * FROM ig WHERE id = '".$_GET['id']."'");
		$xx = $query->fetch_assoc();
	?>

	<div class="row">
		<div class="col-2">
			<img src=" <?php echo $xx['avatar'] ?> " style="width: 130px">
		</div>
		<div class="col-3">
			<h4>Name: <?php echo $xx['name'] ?> </h4>
			<h6>Login: <?php echo $xx['login'] ?> </h6>
		</div>
		<div class="col-7">
			<form method="POST" action="createpost.php" enctype="multipart/form-data">
				<?php echo '<input type="hidden" name="user_id" value="'.$xx['id'].'"  >'?>
				<input type="" name="text">
				<input type="file" name="img">
				<button type="submit">ok</button>
			</form>
		</div>
	</div>

	<div class="container">
		<?php 
		$que = mysqli_query($connect,"SELECT * FROM posts INNER JOIN ig ON posts.user_id = ig.id ORDER BY posts.id DESC");		
		for ($i=0; $i < $que->num_rows; $i++) { 
		$qq = $que->fetch_assoc();?>
			<div class="row">
				<div class="col-1">
					<img src=" <?php echo $qq['avatar'] ?> " style="width: 100px">
				</div>
				<div class="col-11">
					<h5> <?php echo $qq['login'] ?> </h5>
				 	<p> <?php echo $qq['text'] ?> </p>
				 	<img src= "<?php echo $qq['img']?>" >
				</div>
			</div>
		 	<hr>
		<?php } ?>
	</div>
</body>
</html>