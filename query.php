<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>
    <script>
        function doDel(studentid) {
            if (confirm("确定要删除么？")) {
                window.location = 'action.php?action=del&studentid='+studentid;
            }
        }//window.location 对象用于获得当前页面的地址 (URL)，并把浏览器重定向到新的页面。
		//跳转至action.php进行删除操作
    </script>
</head>
<style>
span{
	font-family:"华文行楷";
	color:#386CA2;
}
</style>
<body background="images/1.png">
<center>
    <?php include("menu.php");?>
    <h3><span>浏览学生个人信息</span></h3>
    <table width="850" border="1">
        <tr>
            <th>学号</th>
            <th>姓名</th>
            <th>性别</th>
            <th>年龄</th>
            <th>班级编号</th>
            <th>院系编号</th>
            <th>生日</th>
            <th>籍贯</th>
            <th>图片</th>
            <th>学籍信息</th>
			<th>奖惩信息</th>
        </tr>
         <form name="form1" method="post" action="upload_image_todb.php?action=show" enctype="multipart/form-data">
        </form>
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
        $sql = "SELECT * FROM student";
        foreach ($pdo->query($sql) as $row) { //循环输出信息
            echo "<tr>";
            echo "<td>{$row['studentid']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['sex']}</td>";
            echo "<td>{$row['age']}</td>";
            echo "<td>{$row['classid']}</td>";
			echo "<td>{$row['departid']}</td>";
			echo "<td>{$row['birthday']}</td>";
			echo "<td>{$row['home']}</td>";
			echo "<td>  
                    <a href='photolook.php?studentid=({$row['studentid']})'>查看</a>
                  </td>";  //赋予id进行查看
			echo "<td>  
                    <a href='querysta.php?studentid=({$row['studentid']})'>查看学籍</a>
                  </td>";  //赋予id进行查看
			echo "<td>  
                    <a href='queryrew.php?studentid=({$row['studentid']})'>奖励</a>
					<a href='querypun.php?studentid=({$row['studentid']})'>惩罚</a>
                  </td>";  //赋予id进行查看
            echo "</tr>";
        }
        ?>
    </table>
</center>
</body>
</html>

query