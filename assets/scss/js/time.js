$(document).ready(function() {
    $('body').on('click', '.edit_tro', function(e) {
        e.preventDefault();
        var _this = $(this);
        $('.site').find('.addtro').toggleClass('active');
    });
    $('body').on('click', '.edit_info', function(e) {
        e.preventDefault();
        var _this = $(this);
        $('.site').find('.edit_infos').toggleClass('active');
    });
    $('body').on('click', '.delete', function(e) {
        e.preventDefault();

        var _this = $(this);
        var id = _this.data('id');
        var name = _this.data('name');
        if (confirm('Bạn có chắc muốn ' + name)) {
            $.ajax({
                url: '/phongtro.php',
                method: 'POST',
                data: {
                    id: id,
                    delete: 'delete'
                },
                beforeSend: function() {

                },
                success: function(data) {
                    alert("Xóa thành công !");
                    window.location.href = '/home.php';
                },
                errors: function() {
                    alert('Đã có lỗi ở đây !');
                }
            })
        }
    });
});