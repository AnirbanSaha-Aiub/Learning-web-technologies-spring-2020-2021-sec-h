<?php

	require_once('db.php');

	function validateUser($id, $password){

		$conn = getConnection();

		$sql = "select * from user where id='{$id}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}


	function getUserById($id){

		$conn = getConnection();

		$sql = "select * from user where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from user";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}

	function insertUser($user){

		$conn = getConnection();
		$sql = "insert into user values('{$user['id']}', '{$user['password']}', '{$user['name']}', '{$user['email']}', '{$user['userType']}')";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function changePassword($id, $newPass){
		$conn = getConnection();
		$sql = "update user set password='{$newPass}' where id='{$id}'";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateUser($user){

		$conn = getConnection();
		$sql = "update user set user_name='{$user['username']}', password='{$user['password']}', email='{$user['email']}' ";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from user where id={$id}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>
