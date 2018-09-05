<?php
class input{
	function post($content){
		if($content ==''){
			return false;
		}

		$n = ['张三', '李四', '王五'];

		foreach($n as $name){
			if($name == $content){
				return false;
			}
		}
		return true;
	}
}

?>