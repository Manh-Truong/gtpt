<div class="header">
    <div class="container">
        <ul class="menu flex">
            <li class="menu_item"><a href="./index.php">Trang chủ</a></li>
            <li class="menu_item"><a href="home.php?content=view">Xem nhiều nhất</a></li>
            <li class="menu_item"><a href="home.php?content=new">Mới đăng tải</a></li>
            <li class="menu_item">
     
                <div class="col-lg-8" style="display: contents;">
                    <select name="khuvuc" id="khuvuc" onchange="genderChanged(this)">
                        <?php
                            $sqls = "SELECT * FROM `districks` ";
                            $result = mysqli_query($connect,$sqls);
                            while($row = mysqli_fetch_array($result)) {
                                echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
                            }
                        ?>
                    </select>
                    <a href="home.php?content=addr&id=1" class='addres'>Xem khu vực</a>
                </div>

            </li>
            
            <div class="user flex">
                <div class="avatar">
                    <img src="uploads/<?php echo $_SESSION['avatar']; ?>" alt="" style="border-radius: 50%">
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