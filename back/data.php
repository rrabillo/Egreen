<?php
include("db.php");
extract($_POST);
$data = $_POST['data'];

if(checkEmailExist($data) != 0){
	echo 'mail_already_exist';
}
else{
	$db = sql::getInstance();
	$req = $db->prepare("INSERT INTO emails (email) VALUES (?)");
	$req->execute(array($data));
	echo 'mail_inserted';
}
function checkEmailExist($email)
{
	$db = sql::getInstance();
	$req = $db->prepare("SELECT * FROM emails WHERE email=?");
	$req->execute(array($email));
	return $req->rowCount();
}
