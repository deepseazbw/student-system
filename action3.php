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
if(isset($_GET['action'])){
	switch($_GET['action'])
	{
		case "register":{
		$password1=$_POST['password1'];
        $password2=$_POST['password2']; 
	 if($password1!=$password2){
	          echo "<script> alert('2次密码输入不一致请重新输入');
                         window.location='register.php'; //跳转到输入信息页面
                    </script>";
         }
      else {
	    $password = $_POST['password1'];
        $studentid =$_POST['studentid'];
        //写sql语句
        $sql = "INSERT INTO studentlogin(studentid,password) VALUES ('$studentid','$password')";
        $rw = $pdo->exec($sql);
        if ($rw > 0) {
            echo "<script> alert('注册成功');
                            window.location='studentlogin.php'; //跳转到登录界面
                 </script>";
        } else {
            echo "<script> alert('注册失败'); </script>";
            }
       }
		break;
	 }
	 case "login":{
		$studentid=$_POST['studentid'];
		$password = $_POST['password'];
		echo "$password";
		$sql="select password from studentlogin where studentid = $studentid";
		foreach($pdo->query($sql) as $row);
		//echo "$row['password']";
        if($row['password']==$password){
			 echo "<script> alert('密码正确，登录成功');
                            window.location='menu.php'; 
                 </script>";
		}
		else {
			 echo "<script> alert('密码错误，请再次输入');
                            window.location='studentlogin.php'; 
                 </script>";
		}
		break;
	}
 }
}

