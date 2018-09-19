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
if(isset($_GET['action1']))
switch ($_GET['action1']) {
    case 'add1':{   //增加学籍变更操作
	    $id = $_POST['id'];
	    $studentid = $_POST['studentid'];
        $change1 = $_POST['change1'];
        $rec_time = $_POST['rec_time'];
	    $description = $_POST['description'];
        //写sql语句
        $sql = "INSERT INTO changege(id,studentid,change1,rec_time,description) VALUES ('$id','$studentid','$change1','$rec_time','$description')";
        $rw = $pdo->exec($sql);
        if ($rw > 0) {
            echo "<script> alert('增加成功');
                            window.location='menu1.php'; //跳转到首页
                 </script>";
        } else {
            echo "<script> alert('增加失败');
                         
                 </script>";
        }
        break;
    }
	case 'add2':{   //增加评奖操作
	    $id = $_POST['id'];
	    $studentid = $_POST['studentid'];
        $levels = $_POST['levels'];
        $rec_time = $_POST['rec_time'];
	    $description = $_POST['description'];
        //写sql语句
        $sql = "INSERT INTO reward(id,studentid,levels,rec_time,description) VALUES ('$id','$studentid','$levels','$rec_time','$description')";
        $rw = $pdo->exec($sql);
        if ($rw > 0) {
            echo "<script> alert('增加成功');
                            window.location='menu1.php'; //跳转到首页
                 </script>";
        } else {
            echo "<script> alert('增加失败');
                         
                 </script>";
        }
        break;
    }
		case 'add3':{   //增加惩罚操作
	    $id = $_POST['id'];
	    $studentid = $_POST['studentid'];
        $levels = $_POST['levels'];
        $rec_time = $_POST['rec_time'];
        $enable1 = $_POST['enable1'];
	    $description = $_POST['description'];
        //写sql语句
        $sql = "INSERT INTO punishment(id,studentid,levels,rec_time,enable1,description) VALUES ('$id','$studentid','$levels','$rec_time','$enable1','$description')";
        $rw = $pdo->exec($sql);
        if ($rw > 0) {
            echo "<script> alert('增加成功');
                            window.location='menu1.php'; //跳转到首页
                 </script>";
        } else {
            echo "<script> alert('增加失败');
                         
                 </script>";
        }
        break;
    }

}
