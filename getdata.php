<?php
echo "222222";
if(isset($_GET['id'])) {
$id = $_GET['id'];
echo "1515151";
try {
    $pdo = new PDO("mysql:host=localhost;dbname=test;", "root", "");

} catch (PDOException $e) {
    die("数据库连接失败" . $e->getMessage());
}
$sql = "select bin_data,filetype from ccs_image where id=$id";
$result =$pdo->query($sql);
$data = mysql_result($result,0, "bin_data");
$type = mysql_result($result,0, "filetype");
//header( "Content-type: $type");
echo $data;
}
?>
