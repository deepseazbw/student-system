<center>
<style>
span{
	font-family:"华文行楷";
	color:#386CA2;
}
</style>
	<body background="images/1.png"> </body>
<h3><span>班级信息表</span></h3>
    <table width="500" border="1">
        <tr>
            <th>编号</th>
			<th>全称</th>
       		<th>班长学号</th>
        </tr>
 </center>
       <?php  
        //1.连接数据库
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=test;", "root", "");
			//数据库类型:数据库主机名; 使用的数据库    用户  密码
        } catch (PDOException $e) {
            die("数据库连接失败" . $e->getMessage());
        }
        //2.解决中文乱码问题
        $pdo->query("SET NAMES 'UTF8'");
        //3.执行sql语句，并实现解析和遍历
        $sql = "SELECT * FROM class";
        foreach ($pdo->query($sql) as $row) { //循环输出信息
            echo "<tr>";
            echo "<td><center>{$row['id']}</td></center>";
            echo "<td><center>{$row['name']}</td></center>";
			echo "<td><center>{$row['monitor']}</td></center>";
            echo "</tr>";
        }

        ?>