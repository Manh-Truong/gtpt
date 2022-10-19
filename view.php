<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./js/header.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Danh sách phòng trọ</title>
    <style>
        .motel {
            padding-right: 70px;
            height: 265px;
            background-color: lightgoldenrodyellow;
            margin: 0px 0px 20px 0px;
        }

        form {
            display: inline-flex;
            padding-left: 20px;
        }

        button.btn.btn-danger,
        button.btn.btn-success {
            margin-left: 30px;
            height: 33px;
        }

        .price p {
            font-size: 18px;
        }

        .price #price2,
        .price #price1 {
            margin-left: 10px;
        }

        .find h4 {
            font-weight: bold;
        }

        .address,
        .price {
            display: inline-flex;
        }

        .address p,
        .price p {
            padding-top: 7px;
            font-size: 17px;
        }
    </style>
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918577/phone.png" alt=""></div>+91 9823 132 111
                            </div>
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918597/mail.png" alt=""></div><a href="mailto:fastsales@gmail.com">contact@bbbootstrap.com</a>
                            </div>
                            <div class="top_bar_content ml-auto">
                                <div class="top_bar_user">
                                    <div class="user_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918647/user.svg" alt=""></div>
                                    <div><a href="./logout.php">Đăng nhập quản trị viên</a></div>
                                    <div><a href="./index.php">Đăng xuất</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Main -->

            <div class="header_main">
                <div class="container">
                    <div class="row">

                        <!-- Logo -->
                        <div class="col-lg-2 col-sm-3 col-3 order-1">
                            <div class="logo_container">
                                <div class="logo"><a href="#">GROUP 11</a></div>
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form action="#" class="header_search_form clearfix">
                                            <input type="search" required="required" class="header_search_input" placeholder="Tìm kiếm phòng trọ...">
                                            <div class="custom_dropdown" style="display: none;">
                                                <div class="custom_dropdown_list">
                                                    <span class="custom_dropdown_placeholder clc">Tất cả danh mục</span>
                                                    <i class="fas fa-chevron-down"></i>x x
                                                    <ul class="custom_list clc">
                                                        <li><a class="clc" href="#">All Categories</a></li>
                                                        <li><a class="clc" href="#">Computers</a></li>
                                                        <li><a class="clc" href="#">Laptops</a></li>
                                                        <li><a class="clc" href="#">Cameras</a></li>
                                                        <li><a class="clc" href="#">Hardware</a></li>
                                                        <li><a class="clc" href="#">Smartphones</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="submit" class="header_search_button trans_300" value="Submit"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918770/search.png" alt=""></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wishlist -->
                        <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                            <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                                    <div class="wishlist_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918681/heart.png" alt=""></div>
                                    <div class="wishlist_content">
                                        <div class="wishlist_text"><a href="#">Thành viên</a></div>
                                        <div class="cart_count"><span>5</span></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="main_nav_content d-flex flex-row">

                                <!-- Categories Menu -->



                                <!-- Main Nav Menu -->

                                <div class="main_nav_menu">
                                    <ul class="standard_dropdown main_nav_dropdown">
                                        <li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
                                        <li class="hassubs">
                                            <a hrFef="#">Laptop<i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li>
                                                    <a href="#">Lenovo<i class="fas fa-chevron-down"></i></a>
                                                    <ul>
                                                        <li><a href="#">Lenovo 1<i class="fas fa-chevron-down"></i></a></li>
                                                        <li><a href="#">Lenovo 3<i class="fas fa-chevron-down"></i></a></li>
                                                        <li><a href="#">Lenovo 2<i class="fas fa-chevron-down"></i></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">DELL<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="#">APPLE<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="#">HP<i class="fas fa-chevron-down"></i></a></li>
                                            </ul>
                                        </li>
                                        <li class="hassubs">
                                            <a href="#">Featured Brands<i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li>
                                                    <a href="#">APPLE<i class="fas fa-chevron-down"></i></a>
                                                    <ul>
                                                        <li><a href="#">Laptop<i class="fas fa-chevron-down"></i></a></li>
                                                        <li><a href="#">Mobiles<i class="fas fa-chevron-down"></i></a></li>
                                                        <li><a href="#">Ipads<i class="fas fa-chevron-down"></i></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Samsung<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="#">Lenovo<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="#">DELL<i class="fas fa-chevron-down"></i></a></li>
                                            </ul>
                                        </li>
                                        <li class="hassubs">
                                            <a href="#">Pages<i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                                        <li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
                                    </ul>
                                </div>

                                <!-- Menu Trigger -->

                                <div class="menu_trigger_container ml-auto">
                                    <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                        <div class="menu_burger">
                                            <div class="menu_trigger_text">menu</div>
                                            <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Menu -->

            <div class="page_menu">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="page_menu_content">

                                <div class="page_menu_search">
                                    <form action="#">
                                        <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                                    </form>
                                </div>
                                <ul class="page_menu_nav">
                                    <li class="page_menu_item has-children">
                                        <a href="#">Language<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item">
                                        <a href="#">Home<i class="fa fa-angle-down"></i></a>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                            <li class="page_menu_item has-children">
                                                <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                                <ul class="page_menu_selection">
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                                    <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
                                </ul>

                                <div class="menu_contact">
                                    <div class="menu_contact_item">
                                        <div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570
                                    </div>
                                    <div class="menu_contact_item">
                                        <div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        </div>

    </div>


    <!-- <div class="container find" style="padding-top: 30px; padding-left: 30px;background: #fc8415; color: #fff;width: 100%;">
        
        <h4>Tìm kiếm theo</h4>

        <div class="address">
            <p>Địa điểm:</p>
            <form method="post">
                <select name="address" id="address" class="form-control">
                    <option disabled selected>-- Chọn địa chỉ --</option>
                    <?php
                    include "connect.php";
                    $records = mysqli_query($conn, "SELECT DISTINCT address FROM Motel");

                    while ($row = mysqli_fetch_array($records)) {
                        echo "<option value='" . $row['address'] . "' selected='selected'>" . $row['address'] . "</option>";
                    }
                    ?>
                </select>
                <button type="submit" name="timkiem" class="btn btn-danger">Tìm kiếm</button>
            </form>
        </div>

        <div class="price" style="margin-top: 20px;">
            <p>Khoảng giá:</p>
            <form method="post">
                <div style="display: inline-flex;" class="price">
                    <p> Từ </p>
                    <select name="price1" id="price1" class="form-control" style="width: 120px;">
                        <option disabled selected>-- Chọn giá --</option>
                        <?php
                        include "connect.php";
                        $records = mysqli_query($conn, "SELECT DISTINCT price FROM Motel");

                        while ($row = mysqli_fetch_array($records)) {
                            echo "<option value='" . $row['price'] . "' selected='selected'>" . number_format($row['price'], 0, ",", ".") . "</option>";
                        }
                        ?>
                    </select>

                    <p style="margin-left: 10px;"> đến </p>
                    <select name="price2" id="price2" class="form-control" style="width: 120px;">
                        <option disabled selected>-- Chọn giá --</option>
                        <?php
                        include "connect.php";
                        $records = mysqli_query($conn, "SELECT DISTINCT price FROM Motel");

                        while ($row = mysqli_fetch_array($records)) {
                            echo "<option value='" . $row['price'] . "' selected='selected'>" . number_format($row['price'], 0, ",", ".") . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" name="timkiem-price" class="btn btn-success">Tìm kiếm</button>
            </form>
        </div>
        <div style="margin-top: 30px;">
            <a href="./index.php">Đăng xuất</a>
        </div>
    </div> -->

    <!-- ============================ KẾT QUẢ TÌM KIẾM THEO ĐỊA ĐIỂM =========================== -->
    <div class="container" style="margin-top: 30px;">

        <?php
        if (isset($_POST['timkiem'])) {
            $addr = $_POST['address'];
            $records = mysqli_query($conn, "SELECT * FROM Motel m INNER JOIN user u ON m.user_id = u.user_id WHERE address LIKE '%$addr%'");
            while ($row = mysqli_fetch_array($records)) {
        ?>

                <div class="col-xs-12 col-md-6">
                    <div class="motel row">
                        <div class="col-md-5 col-sm-12 col-xs-12" style="margin-top: 20px;">
                            <div>
                                <a href="details.php?Motel_Id=<?php echo $row['Motel_Id']; ?>" style="text-decoration: none;"><img src="photo/<?php echo $row['images']; ?>" class="img-responsive" style="height: 200px;"></a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div>
                                <h5>
                                    <a href="details.php?Motel_Id=<?php echo $row['Motel_Id']; ?>" style="text-decoration: none;">
                                        <h3><?php echo $row['title']; ?></h3>
                                    </a>
                                </h5>
                            </div>
                            <div style="display: inline-block; width: 500px;">
                                <div style="width: 220px; float: left;">
                                    <p><i class="fa fa-user"></i> Người đăng: <?php echo $row['Name']; ?></p>
                                    <p><i class="fa fa-area-chart"></i> Diện tích: <?php echo $row['area']; ?> m<sup>2</sup></p>
                                    <p><i class="fa fa-map-marker"></i> Địa chỉ: <?php echo $row['address']; ?></p>
                                    <p><i class="fa fa-dollar"></i> Giá: <?php echo number_format($row['price'], 0, ",", "."); ?></p>
                                </div>
                                <div style="width: 280px; float: right;">
                                    <p><i class="fa fa-eye"></i> Lượt xem: <?php echo $row['count_view']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <?php
            }
        }
        ?>
    </div>


    <!-- ============================ KẾT QUẢ TÌM KIẾM THEO KHOẢNG GIÁ =========================== -->
    <div class="container" style="margin-top: 30px;">

        <?php
        if (isset($_POST['price1']) && isset($_POST['price2'])) {
            $price1 = $_POST['price1'];
            $price2 = $_POST['price2'];
            $records = mysqli_query($conn, "SELECT * FROM Motel m INNER JOIN user u ON m.user_id = u.user_id WHERE price BETWEEN $price1 AND $price2");
            while ($row = mysqli_fetch_array($records)) {

        ?>

                <div class="col-xs-12 col-md-6">
                    <div class="motel row">
                        <div class="col-md-5 col-sm-12 col-xs-12" style="margin-top: 20px;">
                            <div>
                                <a href="details.php?Motel_Id=<?php echo $row['Motel_Id']; ?>" style="text-decoration: none;"><img src="photo/<?php echo $row['images']; ?>" class="img-responsive" style="height: 200px;"></a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12" >
                            <div>
                                <h5>
                                    <a href="details.php?Motel_Id=<?php echo $row['Motel_Id']; ?>" style="text-decoration: none;">
                                        <h3><?php echo $row['title']; ?></h3>
                                    </a>
                                </h5>
                            </div>
                            <div style="display: inline-block; width: 500px;">
                                <div style="width: 220px; float: left;">
                                    <p><i class="fa fa-user"></i> Người đăng: <?php echo $row['Name']; ?></p>
                                    <p><i class="fa fa-area-chart"></i> Diện tích: <?php echo $row['area']; ?> m<sup>2</sup></p>
                                    <p><i class="fa fa-map-marker"></i> Địa chỉ: <?php echo $row['address']; ?></p>
                                    <p><i class="fa fa-dollar"></i> Giá: <?php echo number_format($row['price'], 0, ",", "."); ?></p>
                                </div>
                                <div style="width: 280px; float: right;">
                                    <p><i class="fa fa-eye"></i> Lượt xem: <?php echo $row['count_view']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <?php
            }
        }
        ?>
    </div>


    <!-- ============================ PHÒNG TRỌ MỚI ĐĂNG NHẤT =========================== -->
    <div class="container" style="margin-top: 10px;">
        <h4 style="margin-left: 12px; font-size: 2rem;"> PHÒNG TRỌ MỚI ĐĂNG NHẤT</h4>

        <?php
        include("connect.php");

        $per_page_record = 4;
        if (isset($_GET["page"])) {
            $page  = $_GET["page"];
        } else {
            $page = 1;
        }
        $start_from = ($page - 1) * $per_page_record;

        $query = "SELECT * FROM Motel m INNER JOIN user u ON m.user_id = u.user_id order by created_at desc LIMIT $start_from, $per_page_record";
        $values = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($values)) {
        ?>

            <div class="col-xs-12 col-md-6">
                <div class="motel row">
                    <div class="col-md-5 col-sm-12 col-xs-12" style="margin-top: 20px;">
                        <div>
                            <a href="details.php?Motel_Id=<?php echo $row['Motel_Id']; ?>" style="text-decoration: none;"><img src="photo/<?php echo $row['images']; ?>" class="img-responsive" style="height: 200px;"></a>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12 " style="margin-top: 40px;">
                        <div>
                            <h5>
                                <a href="details.php?Motel_Id=<?php echo $row['Motel_Id']; ?>" style="text-decoration: none;">
                                    <h3><?php echo $row['title']; ?></h3>
                                </a>
                            </h5>
                        </div>
                        <div style="display: inline-block; width: 500px;">
                            <div style="width: 220px; float: left;">
                                <p><i class="fa fa-user"></i> Người đăng: <?php echo $row['Name']; ?></p>
                                <p><i class="fa fa-area-chart"></i> Diện tích: <?php echo $row['area']; ?> m2</p>
                                <p><i class="fa fa-map-marker"></i> Địa chỉ: <?php echo $row['address']; ?></p>
                                <p><i class="fa fa-dollar"></i> Giá: <?php echo number_format($row['price'], 0, ",", "."); ?></p>
                            </div>
                            <div style="width: 280px; float: right;">
                                <p><i class="fa fa-eye"></i> Lượt xem: <?php echo $row['count_view']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>
    </div>
    <?php include("pagination.php"); ?>


    <!-- ============================ PHÒNG TRỌ XEM NHIỀU NHẤT =========================== -->
    <div class="container" style="margin-top: 70px;">
        <h4 style="margin-left: 12px; font-size: 2rem;"> PHÒNG TRỌ XEM NHIỀU NHẤT</h4>

        <?php
        include("connect.php");

        $per_page_record = 4;
        if (isset($_GET["page"])) {
            $page  = $_GET["page"];
        } else {
            $page = 1;
        }
        $start_from = ($page - 1) * $per_page_record;

        $query = "SELECT * FROM Motel m INNER JOIN user u ON m.user_id = u.user_id order by count_view desc LIMIT $start_from, $per_page_record";
        $values = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($values)) {
        ?>

            <div class="col-xs-12 col-md-6">
                <div class="motel row">
                    <div class="col-md-5 col-sm-12 col-xs-12" style="margin-top: 20px;">
                        <div>
                            <a href="details.php?Motel_Id=<?php echo $row['Motel_Id']; ?>" style="text-decoration: none;"><img src="photo/<?php echo $row['images']; ?>" class="img-responsive" style="height: 200px;"></a>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12" style="margin-top: 40px">
                        <div>
                            <h5>
                                <a href="details.php?Motel_Id=<?php echo $row['Motel_Id']; ?>" style="text-decoration: none;">
                                    <h3><?php echo $row['title']; ?></h3>
                                </a>
                            </h5>
                        </div>
                        <div style="display: inline-block; width: 500px;">
                            <div style="width: 220px; float: left;">
                                <p><i class="fa fa-user"></i> Người đăng: <?php echo $row['Name']; ?></p>
                                <p><i class="fa fa-area-chart"></i> Diện tích: <?php echo $row['area']; ?> m2</p>
                                <p><i class="fa fa-map-marker"></i> Địa chỉ: <?php echo $row['address']; ?></p>
                                <p><i class="fa fa-dollar"></i> Giá: <?php echo number_format($row['price'], 0, ",", "."); ?></p>
                            </div>
                            <div style="width: 280px; float: right;">
                                <p><i class="fa fa-eye"></i> Lượt xem: <?php echo $row['count_view']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>
    </div>
    <?php include("pagination.php"); ?>


</body>

</html>