$(document).ready(function() {
    $("body").on("click", ".edit_tro", function(e) {
        e.preventDefault();
        $(this);
        $(".site").find(".addtro").toggleClass("active")
    }), $("body").on("click", ".edit_info", function(e) {
        e.preventDefault();
        $(this);
        $(".site").find(".edit_infos").toggleClass("active")
    }), $("body").on("click", ".delete", function(e) {
        e.preventDefault();
        var t = $(this),
            n = t.data("id"),
            i = t.data("name");
        confirm("Bạn có chắc muốn " + i) && $.ajax({ url: "/phongtro.php", method: "POST", data: { id: n, delete: "delete" }, beforeSend: function() {}, success: function(e) { alert("Xóa thành công !"), window.location.href = "/home.php" }, errors: function() { alert("Đã có lỗi ở đây !") } })
    })
});