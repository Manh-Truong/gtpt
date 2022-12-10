<div class="addtro">
    <form class="addtro_active" action="./function/phongtro.php" method="post" enctype="multipart/form-data">
         <h1>Thêm phòng trọ</h1>
        <div class="form_input">
            <label for="">Tên phòng trọ</label>
            <input type="text" class="title" name="title" placeholder="Tên trọ">
        </div>
        <div class="form_input">
            <label for="">Mô tả</label>
            <textarea rows="5" cols="40" type="text" class="description" name="description" placeholder="Mô tả chi tiết"></textarea>
        </div>
        <div class="form_input">
            <label for="">Giá tiền (VND)</label>
            <input type="number" class="price" name="price" placeholder="price" value='200000'>
        </div>
        <div class="form_input">
            <label for="">Diện tích phòng (m<sup>2</sup> )</label>
            <input type="number" class="area" name="area" placeholder="Diện tích phòng">
        </div>
        <div class="form_input">
            <label for="">Địa chỉ trọ</label>
            <input type="text" class="address" name="address" placeholder="Địa chỉ trọ">
        </div>
        <div class="form_input">
            <label for="">Bản đồ </label>
            <input type="text" class="latlng" name="latlng" placeholder="Bản đồ ">
        </div>
        <div class="form_input">
            <label for="">Hình ảnh trọ</label>
            <input type="file" class="images" name="images" placeholder="images">
        </div>
        <div class="form_input flex">
            <label for="">Phân loại trọ &emsp;</label>
            <select name="category_id" id="category_id">
                <?php
                    $sqls = "SELECT * FROM `category`";
                    $result = mysqli_query($connect,$sqls);
                    while($row = mysqli_fetch_array($result)) {
                        echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form_input flex">
            <label for="">Khu vực &emsp;</label>
            <select name="district_id" id="district_id">
                <?php
                    $sqls = "SELECT * FROM `districks`";
                    $result = mysqli_query($connect,$sqls);
                    while($row = mysqli_fetch_array($result)) {
                        echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form_input">
            <label for="">Các tiện ích</label>
            <input type="text" class="utilities" name="utilities" placeholder="Các tiện ích(cách nhau bằng dấu phẩy)">
        </div>
        <div class="form_input">
            <label for="">Số điện thoại</label>
            <input type="text" class="contact" name="contact" placeholder="Số điện thoại">
        </div>
        <h6>Trạng thái mặc định khi khởi tại là còn phòng</h6>
        <div class="form_input">
            <input type='submit' name='submit' class ='add_tro' value='submit'>
        </div>
    </form>
</div>