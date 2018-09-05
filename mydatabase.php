<?php
// header('Content-type: text/html; charset=UTF8');

$host = "127.0.0.1";
$user = "root";
$password = "root";
$db_name = "php10";

$mysqli = new mysqli($host, $user, $password, $db_name);
// var_dump($mysqli);
if($mysqli->connect_errno <> 0){
	die("数据库连接失败！");
}

/*$sql_insert = "INSERT INTO msg (content) VALUES ('我是详情1');";
$is_success = $mysqli->query($sql_insert);
// var_dump($is_success);

if($is_success){
	echo "执行成功";
}else{
	echo "执行失败";
}*/

/*
 * This is the "official" OO way to do it,
 * BUT $connect_error was broken until PHP 5.2.9 and 5.3.0.
 */
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

/*
 * Use this instead of $connect_error if you need to ensure
 * compatibility with PHP versions prior to 5.2.9 and 5.3.0.
 */
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

// echo 'Success... ' . $mysqli->host_info . "\n";
// echo "new line XX";

// $mysqli->close();
?> 