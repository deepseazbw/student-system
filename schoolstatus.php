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
    <h3><span>学籍变更</span></h3>
    <h4><span>个人信息</span></h4>
    <form id="addsch" name="addsch" method="post" action="action1.php?action1=add1">
        <table>
          <tr>
                <td>记录号</td>
                <td><input id="id" name="id" type="text"/></td>

            </tr>
           <tr>
                <td>学号</td>
                <td><input id="studentid" name="studentid" type="text"/></td>

            </tr>
            
            <tr>
                <td>变更代码</td>
                <td><input id="change1" name="change1" type="text"/></td>

            </tr>
            <tr>
                <td>记录时间</td>
                <td><input id="rec_time" name="rec_time" type="text" /></td>
            </tr>
            <tr>
                <td>描述</td>
                <td><input id="description" name="description" type="text"/></td>
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
