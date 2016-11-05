<?php 
@mysql_connect('localhost','root','');
mysql_query('set names utf8');

$sql = 'use hd_admin';


$db = mysql_query($sql);

$sql = "SELECT id FROM hd_grade WHERE name='2013级' ";
$resourse =  mysql_query($sql);
$_2013 = mysql_fetch_assoc($resourse);
$_2013 = $_2013['id'];

// print_r($_2011);

$sql = "SELECT * FROM joiners WHERE grade_id=$_2013";
$result = mysql_query($sql);
while ($t= mysql_fetch_assoc($result)) {
	$data[] = $t; 
}
print_r($data);


?>