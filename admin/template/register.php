<?php 
 include "../../util/util.php";
  $username=$_POST["name"];
  $password=$_POST["password"];
  $email=$_POST["email"]; 
  
  $msg="";

  $sql="select * from sysUser where name='$username'";

  $result=mysqli_query($conn,$sql); 
  if($result->num_rows>0){
         echo '<script type="text/javascript">alert("用户名已存在");location.href="register.html?msg=$msg"</script>'; 
       return;
  }
  $sql2="insert into sysUser values('$username','$password','$email')";

  $flag=mysqli_query($conn,$sql2);

  if($flag)
  {
         echo '<script type="text/javascript">alert("注册成功");location.href="login.html?msg=$msg"</script>'; 
  }
  else
  {
          echo '<script type="text/javascript">alert("注册失败");location.href="register.html?msg=$msg"</script>'; 
  }