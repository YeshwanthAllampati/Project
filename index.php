<!DOCTYPE html>
<html lang="en">
<head>
  <title>GuestLectures</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>

</head>
<body>
<?php require_once 'process.php'; ?>

<?php
if(isset($_SESSION['message'])):?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">
<?Php 
	echo $_SESSION['message'];
	unset($_SESSION['message']);
?>
</div>
<?php endif ?>


<div class="container">
<?php
$mysqli=new mysqli('localhost','root','','nproject') or die(mysqli_error($mysqli));
$result=$mysqli->query("SELECT * FROM npglec")or die($mysqli->error);
//pre_r($result);
?>
<div class="row justify-content-center">
	<table class="table">
		<thead>
			<tr>
				<th>Dept</th>
				<th>Year</th>
				<th>Topic</th>
				<th>Organisation</th>
				<th>Date Entered</th>
				<th>Remarks</th>
				
				
				<th colspan="2">Action</th>
			</tr>
		</thead>
<?php	
	while($row=$result->fetch_assoc()):
?>
<tr>
	<td><?php echo $row['dept']; ?></td>
	<td><?php echo $row['Year']; ?></td>
	<td><?php echo $row['topic']; ?></td>
	<td><?php echo $row['organisation']; ?></td>
	<td><?php echo $row['Date_Ent']; ?></td>
	<td><?php echo $row['remarks']; ?></td>
	
	<td>
	<a href="glform.php?edit=<?php echo $row['id']; ?>"
		class="btn btn-info">EDIT</a>
	<a href="process.php?delete=<?php echo $row['id']; ?>"
		class="btn btn-danger">DELETE</a>	
		
	</td>
</tr>	
<?php endwhile; ?>
</table>
</div>

<?php
pre_r($result->fetch_assoc());

function pre_r($array)
{
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}

?>
<div class="fixed-bottom"><button type="button" class="btn btn-primary" name="B1" onclick="window.location.href = 'http://localhost/Life/ghome.php';">HOME</button>
</div>
</div>
</div>
</body>
</html>
