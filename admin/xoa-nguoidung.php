<?php ob_start(); ?>
<?php if(!isset($_SESSION)) { 
session_start(); 
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xoá người dùng</title>
</head>
<body>
    <?php
        $user_id=$_GET['id'];
        include("../connect.php"); 
        $query = "DELETE FROM user WHERE id='$user_id'";
        $query_run = mysqli_query($connect, $query);
        if($query_run){
            $_SESSION['success'] = "Xoá thành công";
            header('Location: ../admin/nguoidung.php');
        }else{
            $_SESSION['success'] = "Xoá không thành công";
            header('Location: ../admin/nguoidung.php');
        }  
        mysqli_close($connect); 
    ?>  
</body>
</html>
<?php ob_end_flush(); ?>