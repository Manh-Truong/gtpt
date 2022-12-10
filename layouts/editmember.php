<div class="edit_infos">
    <form class="edit_infos_active" action="./function/update.php" method='post' enctype="multipart/form-data">
        <h1>Chỉnh sửa thông tin</h1>
        <input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>">
        <div class="form_input">
            <label for="">Tên hiển thị</label>
            <input type="text" class="name" name="name" placeholder="Tên hiển thị" value="<?php echo $_SESSION['name'];?>">
        </div>
        <div class="form_input">
            <label for="">Tên người dùng</label>
            <input type="text" class="username" name="username" placeholder="Tên người dùng" value="<?php echo $_SESSION['username'];?>">
        </div>
        <div class="form_input">
            <label for="">Số điện thoại</label>
            <input type="text" class="phone" name="phone" placeholder="phone" value="<?php echo $_SESSION['phone'];?>">
        </div>
        <div class="form_input">
            <label for="">Hình ảnh</label>
            <input type="file" class="Avatar" name="Avatar" placeholder="Avatar" accept="image/*">
        </div>
        <div class="form_input">
            <label for="">Email</label>
            <input type="text" class="email" name="email" placeholder="email" value="<?php echo $_SESSION['email'];?>">
        </div>
        <div class="form_input">
            <input type="submit" class="submit" name="submit">Cập nhật thông tin</input>
        </div>
    </form>
</div>