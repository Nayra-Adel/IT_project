<!DOCTYPE html>
<?php include 'db.php';

	$id = (int)$_GET['id'];
	$sql = "select * from filmsTable where id = '$id'";
	$rows = $db->query($sql);
	$row = $rows->fetch_assoc();

	if(isset($_POST['send'])){
		
		$task  = htmlspecialchars($_POST['task']);
		$img = $_FILES['image']['name'];
		$description = htmlspecialchars($_POST['description']); // any sql congection
		$query = "update filmsTable set name = '$task', img = '$img' , description = '$description' where id = '$id'";
		$db->query($query);
	}
?>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<title>update</title>
		<style type="text/css">
			.color, label{
				color: white;
			}
		</style>
	</head>
	<body background="img\BG_Home_1.jpg">
		<div class="container">
			<center><h1 class="color" style="font-family: 'Monoton';" >Update</h1></center>
			<div class="row" style="margin-top: 30px;">
				<div class="col-md-10 col-md-offset-1" >
					<table class="table color">
						<hr><br>
						<form method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Film Name</label>
								<input type="text" required name="task" value="<?php echo $row['name'];?>" class="form-control"><br>
								<label>Description</label>
								<input type="text" required name="description" value="<?php echo $row['description'];?>" class="form-control"><br>
								<label>Image</label>
								<input type="file" required name="image" class="form-control">
							</div>
							<input type="submit" name="send" value="Update" class="btn btn-info">&nbsp;
							<a href="index.php" class="btn btn-danger">Back</a>
						</form>
					</div>
				</div>
			</div>
		</body>
	</html>