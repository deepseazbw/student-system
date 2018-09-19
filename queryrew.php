<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>

</head>
<style>
span{
	font-family:"华文行楷";
	color:#386CA2;
}
</style>
	<body background="images/1.png">
<center>
    <?php  include("menu.php");  ?>
     <h3><span>个人学籍信息</span></h3>
     <table width="600" border="1">
        <tr>
            <th>学号</th>
            <th>记录号</th>
            <th>级别代码</th>
            <th>记录时间</th>
            <th>描述</th>
        </tr>
	<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=test;","root","");
    }catch(PDOException $e){
        die("数据库连接失败".$e->getMessage());
    }
    //2.防止中文乱码
    $pdo->query("SET NAMES 'UTF8'");	 
    //3.拼接sql语句，取出信息
    $sql = "SELECT * from  reward  where studentid = ".$_GET['studentid'];
     foreach ($pdo->query($sql) as $a){//返回预处理对象
            echo "<tr>";             //输出学籍信息
            echo "<td>{$a['studentid']}</td>";
            echo "<td>{$a['id']}</td>";
            echo "<td>{$a['levels']}</td>";
            echo "<td>{$a['rec_time']}</td>";
            echo "<td>{$a['description']}</td>";
			echo "</tr>";
	   }
		 ?>
</center>
</body>
</html>

quertsta