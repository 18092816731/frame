<?php
header("Content-Type:text/html;charset= utf-8");
//算法 m个猴子选猴王 每次数到第n个 
//链接数据库
include './mydata/dababase.php';
$db  = new dataInfo();


$sql = "insert into class value ('',".rand(000,999).",".rand(000,999).",".rand(000,999).")";
echo microtime().'<br>';
for($i=0;$i<2000;$i++){
	$res = $db->dbBase();
	$k = $i+9000;
	$res = mysqli_query($res,"insert into class value ('',".$k.",".rand(000,999).",".rand(000,999).")");
}


echo microtime();
/*echo microtime().'<br>';
$sql = "select * from class";
$res = $db->dbBase();
	$res = mysqli_query($res,$sql);
	print_r($res);
	echo microtime();*/


?>