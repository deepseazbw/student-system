<html>
 <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>上传图片 </title>
 </head>
 <style>
span{
	font-family:"华文行楷";
	color:#386CA2;
}
</style>
<body background="images/1.png">
 <center>
  <h3><span>学生信息的输入</span></h3>
  <h4><span>个人图片上传</span></h4>
  <form name="form1" method="post" action="action2.php" enctype="multipart/form-data">
   <table>
            <tr>
                <td>学号</td>
                <td><input id="studentid" name="studentid" type="text"/></td>
            </tr>
            <tr>
                 <td>图片</td>
            <td><input id="myfile" name="myfile"  type="file"  enctype="multipart/form-data"></td>
            </tr>
  </table>
  <table>
  	 <input type="hidden" name="action" value="add"><input type="submit" name="b1" value="提交">
  </table>
  </form>
  </center>
 </body>
</html>