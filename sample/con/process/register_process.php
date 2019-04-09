<?php 
	session_start();

	require('../config/route.php');

	$date = date('Y-m-d h:i:s');

	$_POST['registration_date'] = $date;

	$info_register = $obj->select(TABLEPRIFIX.'registration','*',['email'=>$_POST['email'],'mob'=>$_POST['mob']],'or');

	if (empty($info_register)) 
	{
		$insert = $obj->insert(TABLEPRIFIX.'registration',$_POST);

		$_SESSION['msg'] = '<div class="alert alert-success alert-dismissible">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <strong>Success!</strong> Registration successfully.
							</div>';

		header("location:../index.php");
	}
	else
	{
		$_SESSION['msg'] = '<div class="alert alert-danger alert-dismissible">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <strong>Error!</strong> Email or phone already exist.
							</div>';

		header("location:../index.php");
	}
	
 ?>