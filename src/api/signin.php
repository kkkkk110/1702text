<?php
	include 'connect.php';

	$username = isset($_GET['username']) ? $_GET['username'] : '';
	$password = isset($_GET['password']) ? $_GET['password'] : '';

	$password = md5($password);

	$sql = "insert into user(username,password) values('$username','$password')";

	// 获取查询结果
	$res = $conn->query($sql);

	if($res){
		echo "ok";
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>