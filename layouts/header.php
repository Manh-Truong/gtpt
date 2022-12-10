<div class="header">
    <div class="container">
        <ul class="menu flex">
            <li class="menu_item"><a href="./index.php">Trang chủ</a></li>
            <li class="menu_item"><a href="">Giới thiệu</a></li>
            <li class="menu_item"><a href="">Trọ cao cấp</a></li>
            <li class="menu_item"><a href="">Trọ thường</a></li>
            <li class="menu_item"><a href="">Chung cư cho thuê</a></li>
            <div class="user flex">
                <div class="avatar">
                    <img src="uploads/<?php echo $_SESSION['avatar']; ?>" alt="">
                    <a href=""><?php echo $_SESSION["name"]; ?></a>
                    <div class="sub">
                        <div class="sub_item edit_tro"><a >Thêm nhà trọ</a></div>
                        <div class="sub_item edit_info"><a >Chỉnh sửa thông tin</a></div>
                        <div class="sub_item"><a href="./function/logout.php">Đăng xuất</a></div>
                    </div>
                </div>
            </div>
        </ul>
    </div>
</div>