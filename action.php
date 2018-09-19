<?php
//1.连接数据库
try {
    $pdo = new PDO("mysql:host=localhost;dbname=test;", "root", "");

} catch (PDOException $e) {
    die("数据库连接失败" . $e->getMessage());
}
//2.防止 中文乱码
$pdo->query("SET NAMES 'UTF8'");
//3.通过action的值进行对应操作
if(isset($_GET['action']))
switch ($_GET['action']) {
    case 'add':{   //增加操作
	    $studentid = $_POST['studentid'];
        $name = $_POST['name'];
        $sex = $_POST['sex'];
	    $age = $_POST['age'];
        $classid = $_POST['classid'];
        $departid = $_POST['departid'];
        $birthday = $_POST['birthday'];
	    $home = $_POST['home'];
        //写sql语句
        $sql = "INSERT INTO student(studentid,name,sex,age,classid,departid,birthday,home) VALUES ('$studentid','$name','$sex','$age','$classid','$departid','$birthday','$home')";
        $rw = $pdo->exec($sql);
        if ($rw > 0) {
            echo "<script> alert('增加成功');
                            window.location='query1.php'; //跳转到首页
                 </script>";
        } else {
            echo "<script> alert('增加失败');
                         
                 </script>";
        }
        break;
    }
    case "del": {    //1.获取表单信息
        $studentid = $_GET['studentid'];
        $sql = "DELETE FROM student WHERE studentid={$studentid}";
        $pdo->exec($sql);
        header("Location:menu.php");//跳转到首页
        break;
    }
    case "edit" :{   //1.获取表单信息
        $studentid = $_POST['studentid'];
        $name = $_POST['name'];
        $sex = $_POST['sex'];
	    $age = $_POST['age'];
        $classid = $_POST['classid'];
        $departid = $_POST['departid'];
        $birthday = $_POST['birthday'];
	    $home = $_POST['home'];
        $sql = "UPDATE student SET name='{$name}',sex='{$sex}',age='{$age}',classid='{$classid}',
		departid='{$departid}',birthday='{$birthday}',home='{$home}' WHERE studentid='{$studentid}' ";
        $rw=$pdo->exec($sql);
         if($rw>0){
            echo "<script>alert('修改成功');window.location='query1.php'</script>";
        }else{
            echo "<script>alert('修改失败');window.history.back()</script>";
        }
        break;
    }

}
