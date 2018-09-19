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
	<body background="images/1.png"></body>
<center>
    <h3><span>用户管理</span></h3>
    <h4><span>教师用户注册</span></h4>
    <form id="addstu" name="addstu" method="post" action="action4.php?action=register">
        <table>  
           <tr>
                <td>用户名</td>
                <td><input id="teacherid" name="teacherid" type="text"/></td>

            </tr>
            <tr>
                <td>输入密码</td>
                <td><input id="password1" name="password1" type="password"/></td>

            </tr>
            <tr>
                <td>再次输入密码</td>
                <td><input id="password2" name="password2" type="password"/></td>

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