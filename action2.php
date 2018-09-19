<?php
//第一步：明确服务器规定上传至服务器的文件类型。这里我们只允许上传以下类型的图片。
$allowedExts = array("gif", "jpeg", "jpg", "png");// 允许上传的图片后缀
//第二部：获取上传的文件名称，通过explorde（）函数将其分割成字符串形式的数组。
$temp = explode(".", $_FILES["myfile"]["name"]);
echo $_FILES["myfile"]["size"];
$extension = end($temp);   // end函数用于获取数组中最后一个元素的值。
//第三步：列出上传文件需要满足的
if ((($_FILES["myfile"]["type"] == "image/gif")
|| ($_FILES["myfile"]["type"] == "image/jpeg")
|| ($_FILES["myfile"]["type"] == "image/jpg")
|| ($_FILES["myfile"]["type"] == "image/pjpeg")
|| ($_FILES["myfile"]["type"] == "image/x-png")
|| ($_FILES["myfile"]["type"] == "image/png"))
&& ($_FILES["myfile"]["size"] < 2048000)  // 小于 2000 kb
&& in_array($extension, $allowedExts))//in_array表示在$allowedExts数组中查找$extension这个字符串
{
  if ($_FILES["myfile"]["error"] > 0)
  {
    echo "错误：: " . $_FILES["myfile"]["error"] . "<br>";
  }
  else
  {
    echo "上传文件名: " . $_FILES["myfile"]["name"] . "<br>";
    echo "文件类型: " . $_FILES["myfile"]["type"] . "<br>";
    echo "文件大小: " . ($_FILES["myfile"]["size"] / 1024) . " kB<br>";
    echo "文件临时存储的位置: " . $_FILES["myfile"]["tmp_name"] . "<br>";
 
    // 判断当期目录(即www文件夹中)下的 upload 目录（自己创建，名字自取）是否存在该文件
    // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
    if (file_exists("upload/" . $_FILES["myfile"]["name"]))
    {
      echo $_FILES["myfile"]["name"] . " 文件已经存在。 ";
    }
    else
    {
      // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
      move_uploaded_file($_FILES["myfile"]["tmp_name"], "upload/" . $_FILES["myfile"]["name"]);//
      echo "文件存储在: " . "upload/" . $_FILES["myfile"]["name"];
    }
	//存贮数据库
	 try {
    $pdo = new PDO("mysql:host=localhost;dbname=test;", "root", "");

     } catch (PDOException $e) {
    die("数据库连接失败" . $e->getMessage());
      }
      //2.防止 中文乱码
     $pdo->query("SET NAMES 'UTF8'");
	 $form_data_name = $_FILES['myfile']['name'];  
     $form_data_size = $_FILES['myfile']['size'];  
     $form_data_type = $_FILES['myfile']['type'];  
     $form_data = "d:/code/upload/".$_FILES["myfile"]["name"];
	 $data = addslashes(fread(fopen($form_data, "r"), filesize($form_data)));  
	 $studentid = $_POST['studentid'];
	  echo "$studentid<br>";
	  //echo "$data<br>";
	  echo "$form_data_name<br>";
	  echo "$form_data_size<br>";
	  echo "$form_data_type<br>";
	 $sql=("INSERT INTO ccs_image (studentid,filename,filesize,filetype) VALUES ('$studentid','$form_data_name','$form_data_size','$form_data_type')"); 
	  $rw = $pdo->exec($sql);
        if ($rw > 0) {
            echo "<script> alert('增加成功');
                            window.location='query.php'; //跳转到首页
                 </script>";
        } else {
            echo "<script> alert('增加失败');
                         
                 </script>";
        } 
  }
}
else
{
  echo "非法的文件格式";
}
?>