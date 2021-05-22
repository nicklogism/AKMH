<?php
	require_once("conn.php");
	$age = '';   if(isset($_GET['age']))   $age   = mysqli_real_escape_string($conn, $_GET['age']);
	$sex = '';   if(isset($_GET['sex']))   $sex   = mysqli_real_escape_string($conn, $_GET['sex']);
	$score = ''; if(isset($_GET['score'])) $score = mysqli_real_escape_string($conn, $_GET['score']);
	

	$json_data=array();
	
	
	$query = "SELECT * FROM cities ";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	$cities=array();
	$tmp=array();
	while($row = mysqli_fetch_array($result)){
		$tmp['id']    = $row['id'];
		$tmp['name']  = $row['name'];	
		$cities[]=$tmp;
	}
	$json_data['cities']=$cities;
	
	
	
	$query = "SELECT * FROM ajax_example WHERE TRUE ";
	if($sex) 
		$query .= " AND ae_sex = '$sex' "; 
	if($age)
		$query .= " AND ae_age <= '$age' ";
	if($score)
		$query .= " AND ae_score <= '$score' ";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	$tmp=array();
	
	// Insert a new row in the table for each person returned
	while($row = mysqli_fetch_array($result)){
		$tmp['id']    = $row['id'];
		$tmp['name']  = $row['ae_name'];
		$tmp['age']   = $row['ae_age'];
		$tmp['sex']   = $row['ae_sex'];
		$tmp['score'] = $row['ae_score'];
		$records[]=$tmp;
	}
	
	$json_data['records']=$records;
	print json_encode($json_data);
?>