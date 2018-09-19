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
<body background="images/1.png">
<center>
    <h3><span>学生用户登录</span></h3> 
    <form id="addstu" name="addstu" method="post" action="action3.php?action=login">
        <table>
           <tr>
                <td>用户名</td>
                <td><input id="studentid" name="studentid" type="text"/></td>

            </tr>
            <tr>
                <td>输入密码</td>
                <td><input id="password" name="password" type="password"/></td>

            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="Submit" value="确认"/>&nbsp;&nbsp;
                    <input type="reset"  name="Submit" value="重置"/>
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>

register