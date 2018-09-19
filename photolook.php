<?php
header('content-type:image/jpeg');
 //读写图片

try {
    $pdo = new PDO("mysql:host=localhost;dbname=test;", "root", "");

} catch (PDOException $e) {
    die("数据库连接失败" . $e->getMessage());
}
$studentid=$_GET['studentid'];
$sql = "select * from ccs_image where studentid=".$studentid;
foreach ($pdo->query($sql) as $a);
$filename="d:/code/upload/".$a['filename'];
$handle=fopen($filename,'rb+'); //读写二进制，图片的可移植性
$res=fread($handle,filesize($filename));
fclose($handle);
echo $res;
?>