<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Trang đăng nhập</title>
    <link href="./css/login.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Đăng nhập</h4>
                                    <form action="login.php" method="POST">
                                        <div class="form-group">
                                            <label><strong>Tên tài khoản</strong></label>
                                            <input type="text" class="form-control" name="Username" require='require' placeholder="Enter username">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Mật khẩu</strong></label>
                                            <input type="password" class="form-control" name="Password" require='require' placeholder="Enter password">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" name="btn_login">Đăng nhập</button>
                                        </div>
                                        <a href="sigin.php">Đăng ký tài khoản !</a>
                                    </form>
                                    <div>
                                        <a href="./view.php">Quay lại</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    session_start();
    include './connect.php';
    if (isset($_POST["btn_login"])) {
        $username = $_POST["Username"];
        $password = $_POST["Password"];

        if ($username == "" || $password == "") {
            echo "<script> alert('Username hoặc password bạn không được để trống!') </script>";
        } else {

            $sql = "SELECT * FROM user u INNER JOIN motel m ON m.user_id = m.user_id INNER JOIN category c
            ON c.category_id = m.category_id WHERE u.Username = '$username' AND u.Password = '$password'";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);

            if ($count == 0) {
                echo "<script> alert('Tên đăng nhập hoặc mật khẩu không đúng !') </script>";
            } else {
                $_SESSION['Username'] = $username;
                $_SESSION['Password'] = $password;

                $row = mysqli_fetch_array($result);
                $_SESSION['user'] = $row['user_id'];
                $_SESSION['category'] = $row['category_id'];
                $_SESSION['districts'] = $row['district_id'];
                $_SESSION['ROLE'] = $row['Role'];
                $_SESSION['IS_LOGIN'] = 'yes';
                $_SESSION['Name'] = $row['Name'];
                $_SESSION['Email'] = $row['Email'];
                $_SESSION['Phone'] = $row['Phone'];
                $_SESSION['Avatar'] = $row['Avatar'];

                if ($row['Role'] == 1) {
                    header('location: admin/view-motel.php');
                    die();
                }
                if ($row['Role'] == 0) {
                    header('location: view.php');
                    die();
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

    ?>

</body>

</html>