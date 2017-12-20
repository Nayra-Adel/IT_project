<!DOCTYPE html>
<?php include 'db.php';

$page = (isset($_GET['page']) ? (int)$_GET['page'] : 1);
$perPage = (isset($_GET['per-page']) && (int)($_GET['per-page']) <= 50 ? (int)$_GET['per-page'] : 5);
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;


$sql = "select * from filmsTable limit ".$start." , ".$perPage." ";
$total = $db->query("select * from filmsTable")->num_rows;
$pages = ceil($total / $perPage);
$rows = $db->query($sql);

?>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
		<script src="bootstrap\ajax.js">
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<style type="text/css">
			.color{
				color: white;
			}
		</style>
	<title> Admin panel </title>
	</head>
	<body background="img\BG_Home_1.jpg">
		<div class="container">
			<center><h1 class="color" style="font-family: 'Monoton';">Admin</h1></center>
			<div class="row" style="margin-top: 70px;">
				<div class="col-md-10 col-md-offset-1" >
					<table class="table">
						<button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-info ">Add Film</button>&nbsp;&nbsp;&nbsp;

						<a href="view.php" class="btn btn-danger">View</a> 

						<hr>						
						<!-- Modal -->
						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Favorite Films</h4>
									</div>
									<div class="modal-body">

										<form method="post" action="add.php" enctype="multipart/form-data">

											<div class="form-group">
												<label>Name</label>
												<input type="text" required name="name" class="form-control">

												<label>Description</label>
												<input type="text" required name="description" class="form-control">

												<label>Image</label>
												<input type="file" required name="image" class="form-control">
											</div>

											<input type="submit" name="add_film" value="Add Film" class="btn btn-info">
										</form>

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<table class="table color">
							<thead>
								<tr>
									<th>ID.</th>
									<th>Film</th>
								</tr>
							</thead>
							<tbody>
								<?php while($row = $rows->fetch_assoc()): ?>
								<th><?php echo $row['id'] ?></th>
								<td class="col-md-10"><?php echo $row['name'] ?> </td>
							    <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-info">Edit</a> </td>
		                        <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-info">Delete</a> </td>
		                        <td><a href="show.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Show</a> </td>
							</tr>
							<?php endwhile; ?>
							
						</tbody>
					</table>
					<center>
						<ul class="pagination">
						<?php for($i = 1 ; $i <= $pages; $i++): ?>
						<li><a href="?page=<?php echo $i;?>&per-page=<?php echo $perPage;?>"><?php echo $i; ?></a></li>

						<?php endfor; ?>
						</ul>
					</center>
				</div>
			</body>
		</html>