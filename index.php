<?php
date_default_timezone_set('PRC');
include('mydatabase.php');
$sql_query = "SELECT * FROM msg ORDER BY Id DESC;";

$query_result = $mysqli->query($sql_query);
//var_dump($query_result);
if($query_result){
	echo "查询成功并返回数据 on index.php";
}else{
	echo "查询失败 on index.php ";
}
$rows = [];
while($row = $query_result->fetch_array(MYSQL_ASSOC)){
	$rows[] = $row;
}
//var_dump($rows);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>留言本</title>
	<style type="text/css">
		.wrap{
			width:600px;
			margin:0px auto;
		}
		.add{overflow: hidden;}
		.add .content{
			width:598px;
			margin: 0;
			padding: 0;
		}
		.add .user{
			float: left;
		}
		.add .btn{
			float: right;
		}

		.msg{
			margin:20px 0px;
			background: #ccc;
			padding: 5;
		}
		.msg .info{
			overflow: hidden;
		}
		.msg .user{
			float: left;
		}
		.msg .time{
			float: right;
		}
		.msg .content{
			width: 100%;
			padding: 5px;
		}

	</style>
</head>
<body>
	<div class="wrap">
		<!-- 发表留言-->
		<div class="add">
			<form action="save.php" method="post">
				<textarea name="content" class="content" cols="50" rows="5" placeholder="留言内容"></textarea>
				<input name="user" type="text" class="user" placeholder="留言人" />
				<input type="submit" name="btn" class="btn" />
			</form>
		</div>
		<!-- 查看留言 -->
		<?php
		foreach($rows as $row){
		?>
			<div class="msg">
				<div class="info">
					<span class="user"><?php echo $row['user'];?></span>
					<span class="time"><?php echo date("Y-m-d H:i:s", $row['publish_time']);?></span>
				</div>
				<div class="content">
					<?php echo $row['content'];?>
				</div>
			</div>
		<?php
		}
		?>
		
</body>	
</html>