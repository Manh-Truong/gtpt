<?php
    session_start();
    require 'connect.php';
    $err="";
    if(isset($_SESSION["name"])){
        header("Location: home.php");
    }
    else
    {
        if(isset($_POST["submit"])){
            $user =  $_POST["username"];
            $pass =  $_POST["password"];
            if((strlen($user) < 4) || strlen($pass) < 4){
                $err="Vui lòng nhập tên người dùng !";
            }
            else{
                $sqls = "SELECT * FROM `user` WHERE `username`='".$user."' AND `password`='".md5($pass)."';";
                $result = mysqli_query($connect,$sqls);
                $rows = mysqli_num_rows($result);
                $value = mysqli_fetch_assoc($result);
                if($rows == 1){ 
                    $_SESSION['username'] = $user;
                    $_SESSION['id']  = $value["id"];
                    $_SESSION['name']  = $value["name"];
                    $_SESSION['email']  = $value["email"];
                    $_SESSION['phone']  = $value["phone"];
                    $_SESSION['avata']  = $value["avata"];
                    header("Location: home.php");
                }else{
                    $err =  "Tên đăng nhập hoặc mật khẩu không đúng!";
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="site">
        <div class="container"> 
            <div class="site_main">
                <form action="index.php" method="post" class="login">
                    <h1>Đăng nhập tài khoản</h1>
                    <div class="form_input">
                        <input type="text" class="username" name="username" placeholder="Tên đăng nhập">
                    </div>
                    <div class="form_input">
                        <input type="password" class="password" name="password" placeholder="Mật khẩu">
                    </div>
                    <div class="form_input">
                        <input type="submit" class="submit" name="submit" value="Đăng nhập">
                    </div>
                    <a href="sigin.php">Đăng ký tài khoản !</a>
                </form>
                <label class="fadeIn" href="#"><?php echo $err; ?></label>
            </div> 
        </div>
    </div>
</body>
</html>