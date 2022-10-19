<?php
    session_start();
    require 'connect.php';
    $err = "";
    if(isset($_POST["submit"])){
        $user =  $_POST["username"];
        $pass =  $_POST["password"];
        $password_confim =  $_POST["password_confim"];
        $email =  $_POST["email"];
        $phone =  $_POST["phone"];
        $name =  $_POST["name"];
        $query = "INSERT INTO `user`( `name`, `username`, `password`, `role`, `phone`, `avata`, `email`, `status`)
        VALUES (N'".$name."','".$user."','".md5($pass)."',0,'".$phone."','https://datxanhhatinh.com/wp-content/uploads/2020/06/46315527.jpg','".$email."',1)";
        $result = mysqli_query($conn,$query);
        if($result){
            header("Location: index.php");
        }
        else{
            // echo "Thất bại".mysql_error($connect);
            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="//assets/css/style.min.css">
    <title>Đăng ky tài khoản</title>
</head>
<body>
    <div class="site">
        <div class="container"> 
            <div class="site_main">
                <form action="sigin.php" method="post" class="login">
                    <h1>Đăng ký tài khoản</h1>
                    <div class="form_input">
                        <input type="text" class="username" name="username" placeholder="Tên đăng nhập">
                    </div>
                    <div class="form_input">
                        <input type="password" class="password" name="password" placeholder="Mật khẩu" >
                    </div>
                    <div class="form_input">
                        <input type="password" class="password_confim" name="password_confim" placeholder="Nhập lại mật khẩu">
                    </div>
                    <div class="form_input">
                        <input type="text" class="email" name="email" placeholder="Email">
                    </div>
                    <div class="form_input">
                        <input type="text" class="phone" name="phone" placeholder="Phone">
                    </div>
                    <div class="form_input">
                        <input type="text" class="name" name="name" placeholder="Nhập tên">
                    </div>
                    <div class="form_input">
                        <input type="submit" class="submit" name="submit" value="Đăng ký">
                    </div>
                    <a href="index.php">Đăng nhập</a>
                </form>
                <a class="fadeIn" href="#"><?php echo $err;?></a>
            </div> 
        </div>
    </div>
</body>
</html>