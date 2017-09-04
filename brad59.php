<?php
if (!isset($_GET['account'])) header("Location:brad55.php");

$mysqli = new mysqli('localhost','root','root','iii');

$id = $_GET['id'];
$account = $_GET['account'];
$passwd = password_hash($_GET['passwd'], PASSWORD_DEFAULT);
$realname = $_GET['realname'];

$sql = "UPDATE member SET account='{$account}',passwd='{$passwd}',realname='{$realname}' WHERE id = {$id}";
$mysqli->query($sql);
header("Location: brad55.php");
