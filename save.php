<?php
header('Content-type: text/html; charset=UTF8');
date_default_timezone_set('PRC');
include('input.php');
include('mydatabase.php');

$content  = $_POST['content'];
$user  = $_POST['user'];

$input = new input();

//调用函数，检查留言内容
$is = $input->post($content);
if($is == false){
	die('留言内容的数据不正确');
}

//调用函数，检查留言人
$is = $input->post($user);
if($is == false){
	die('留言人的数据不正确');
}

var_dump($content, $user);

$publish_time = time();
$sql_insert = "INSERT INTO msg (content, user, publish_time) VALUES ('{$content}', '{$user}', '{$publish_time}')";
//$sql_insert = "INSERT INTO msg (content, user) VALUES ('{$content}', '{$user}', '{$publish_time}')";
// $mysqli = new mydatabase();
$is_success = $mysqli->query($sql_insert);
// var_dump($is_success);
if($is_success){
	// echo "执行成功";
	header("location: index.php");
}else{
	echo "执行失败";
}
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
?>