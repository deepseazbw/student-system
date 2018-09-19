<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>

</head>
<body>
<center>
    <?php
    include("menu.php");
    //1.连接数据库
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=test;","root","");
    }catch(PDOException $e){
        die("数据库连接失败".$e->getMessage());
    }
    //2.防止中文乱码
    $pdo->query("SET NAMES 'UTF8'");
    //3.拼接sql语句，取出信息
    $sql = "SELECT * FROM student where studentid = ".$_GET['studentid'];
    $stmt = $pdo->query($sql);//返回预处理对象
    if($stmt->rowCount()>0){
        $stu = $stmt->fetch(PDO::FETCH_ASSOC);//按照关联数组进行解析
    }else{
        die("没有要修改的数据！");
    }
    ?>
    <form id="addstu" name="editstu" method="post" action="action.php?action=edit">
        <input type="hidden" name="studentid" id="studentid" value="<?php echo $stu['studentid'];?>"/>
        <table>
            <tr>
                <td>姓名</td>
                <td><input id="name" name="name" type="text" value="<?php echo $stu['name']?>"/></td>

            </tr>
             <tr>
                <td>性别</td>
                <td><input  name="sex" id="sex" type="text"value="<?php echo $stu['sex']?>"/></td>
            </tr>
            <tr>
                <td>年龄</td>
                <td><input name="age" id="age"  type="text" value="<?php echo $stu['age']?>"/></td>
            </tr>
            <tr>
                <td>班级编号</td>
                <td><input id="classid" name="classid" type="text" value="<?php echo $stu['classid']?>"/></td>
            </tr>
             <tr>
                <td>院系编号</td>
                <td><input id="departid" name="departid" type="text" value="<?php echo $stu['departid']?>"/></td>
            </tr>
             <tr>
                <td>生日</td>
                <td><input id="birthday" name ="birthday" type="text" value="<?php echo $stu['birthday']?>"/></td>
            </tr>
             <tr>
                <td>籍贯</td>
                <td><input id="home" name="home" type="text" value="<?php echo $stu['home']?>"/></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="修改"/>&nbsp;&nbsp;
                    <input type="reset" value="重置"/>
                </td>
            </tr>
        </table>

    </form>
</center>
</body>
</html>