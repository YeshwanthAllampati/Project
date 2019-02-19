<?php

session_start();


$mysqli=new mysqli('localhost','root','','nproject') or die(mysqli_error($mysqli));

$id=0;
$dept='';
$Year='';
$topic='';
$organisation='';
$remarks='';
$update=false;

if(isset($_POST['save']))
{
	$dept=$_POST['dept'];
	$Year=$_POST['Year'];
	$topic=$_POST['topic'];
	$organisation=$_POST['organisation'];
	$remarks=$_POST['remarks'];
	$evcode=$_POST['evcode'];
	
	
	$mysqli->query("INSERT INTO npglec(dept,Year,topic,organisation,remarks,evcode,Date_Ent) 
	VALUES('$dept','$Year','$topic','$organisation','$remarks','$evcode',NOW())")
	or die(mysqli_error($mysqli));
	$_SESSION['message']="Record has been saved";
	$_SESSION['msg_type']="success";
	
	header("location: index.php");
}
	
if(isset($_GET['delete']))
{
	$id=$_GET['delete'];
	$mysqli->query("DELETE FROM npglec WHERE id=$id") or die($this->error($mysqli));
	
	$_SESSION['message']="Record has been deleted";
	$_SESSION['msg_type']="danger";

	header("location: index.php");
}	

if(isset($_GET['edit']))
{
	$id=$_GET['edit'];
	$update=true;
	$result=$mysqli->query("SELECT * FROM npglec WHERE id=$id") or die($mysqli->error()) ;
	if(count($result)==1)
	{
		$row=$result->fetch_array();
		$dept=$row['dept'];
		$Year=$row['Year'];
		$topic=$row['topic'];
		$organisation=$row['organisation'];
		$remarks=$row['remarks'];
		$evcode=$row['evcode'];
	}
	
}

if(isset($_POST['update']))
{
	
	$id = $_POST['id'];
		$dept=$_POST['dept'];
		$Year=$_POST['Year'];
		$topic=$_POST['topic'];
		$organisation=$_POST['organisation'];
		$remarks=$_POST['remarks'];
		$evcode=$_POST['evcode'];
	
	$mysqli->query("UPDATE npglec SET dept='$dept',Year='$Year',topic='$topic',organisation='$organisation',remarks='$remarks',evcode='$evcode' WHERE id=$id") 
	or die($mysqli->error());
	
	$_SESSION['message']="Record has been Updated";
	$_SESSION['msg_type']="warning";
	
	header("location: index.php");
}
?>