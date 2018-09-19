<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>
</head>
<style type="text/css">
span{
	font-family:"华文行楷";
	color:#386CA2;
}
</style>
	<body background="images/1.png"></body>
<center>
    <h3><span>学生信息的输入</span></h3>
    <h4><span>个人信息</span></h4>
    <form id="addstu" name="addstu" method="post" action="action.php?action=add">
        <table>
           <tr>
                <td>学号</td>
                <td><input id="studentid" name="studentid" type="text"/></td>

            </tr>
            <tr>
                <td>姓名</td>
                <td><input id="name" name="name" type="text"/></td>

            </tr>
            <tr>
                <td>性别</td>
                <td><input id="sex" name="sex" type="text"/></td>

            </tr>
            <tr>
                <td>年龄</td>
                <td><input id="age" name="age" type="text" /></td>
            </tr>
            <tr>
                <td>班级编号</td>
                <td><input id="classid" name="classid" type="text"/></td>
            </tr>
             <tr>
                <td>院系编号</td>
                <td><input id="departid" name="departid" type="text"/></td>
             </tr>
             <tr>
                <td>生日</td>
                <td><input id="birthday" name="birthday" type="text"/></td>
             </tr>
             <tr>
                <td>籍贯</td>
                <td><input id="home" name="home" type="text"/></td>
             </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="Submit" value="增加"/>&nbsp;&nbsp;
                    <input type="reset"  name="Submit" value="重置"/>
                </td>
            </tr>
        </table>

    </form>
</center>
</body>
</html>
