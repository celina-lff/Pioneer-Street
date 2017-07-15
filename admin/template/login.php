<?php
  session_start();
  include "../../util/util.php";
  $name=$_POST['username'];
  $password=$_POST['password'];

  $sql="select * from sysUser where name= '$name' and password='$password'";
  $result=mysqli_query($conn,$sql);

  $msg="";

  if($result->num_rows>0){
      $row = mysqli_fetch_array($result);
      $_SESSION["user"] = $row;
      header("location:index.php");
      exit();//退出当前页面的操作
  }else{
        echo '<script type="text/javascript">alert("用户名或密码错误");location.href="login.html?msg=$msg"</script>'; 
  	
  }
 

