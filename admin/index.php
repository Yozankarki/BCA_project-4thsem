<?php session_start(); 
include_once('../include/databaseconn.php');
// Code for login 
if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $pass=md5($_POST['password']);
$sql = mysqli_query($connection,"SELECT * FROM users WHERE email='$username' and password='$pass' and user_type='admin' ");
$num=mysqli_fetch_array($sql);
if($num>0)
{
$extra="dashboard.php";
$_SESSION['email']=$_POST['username'];
$_SESSION['adminid']=$num['id'];
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="index.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <style>
      *{
        box-sizing: border-box;
      }
      body{
        font-family: Arial, Helvetica, sans-serif;
      }
      input[type=text],
      input[type=password]{
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
      }
      input[type=text]:focus,
      input[type=password]:focus {
        background-color: lightgrey;
        outline: none;
      }
      .btn {
        border: none;
        color: white;
        padding: 10px 58px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
        background-color: #04AA6D;
      }
      .btn:hover {background-color: #46a049;}
      .container{
        padding: 16px;
        display: flex;
        justify-content: center;
        min-height: 100vh;
        background: url('../photos/room7.jpg') ;
        background-repeat: no-repeat;
        background-size: 100% 100%;
      }
      .container form{
        min-width: 30%;
        min-height: 80%;
      }
      h3{
        text-transform: uppercase;
        text-align: center;
      }
      label{
        text-transform: uppercase;
        font-weight: bold;
      }
      .small{
        margin-top: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid #ccc;
        background-color: red;
        padding: 10px;
      }
      .small a{
        text-decoration: none;
        color: white;
      }
      .small:hover{
        opacity: 0.7;
      }

</style>
</style>
</head>
<body>
    <div class="container">
      <div class="bg-image"></div>
       <form action="" method="post">
       <h3>Admin Login</h3>
       <label>E-mail</label>
        <input name="username" type="text" placeholder="Enter your email" required/><br>
        <label>Password</label>
        <input name="password" type="password" placeholder="Password" required /><br>
        <button class="btn" name="login" type="submit">Login</button>
        
        <div class="small">
            <a href="../index.php">Back to Home Page</a>
        </div>

       </form>
    </div>
<?php include('../include/footer.php');?>
</body>
</html>
