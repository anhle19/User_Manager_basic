<?php
$list_product = array(
    array(
        'title' => 'Tai nghe bluetooth 5.0 True Wireless Amoi F9 Pro',
        'content' => 'BINTECH CAM KẾT :

- Mang lại cho quý khách những sản phẩm tốt nhất, đẹp nhất.

- Nếu hàng bị lỗi do sản xuất. BINTECH cam kết sẽ hoàn tiền hoặc gửi lại sản mới thay thế cho quý khách.

- Cửa hàng đồ chơi công nghệ số 1 Việt Nam'
    ),
    array(
        'title' => 'Bảng Viết Vẽ Điện Tử tự xoá LCD 8.5 inch thông minh cho bé(BẬT CÔNG TẮC ĐẰNG SAU)',
        'content' => 'Quý khách lưu ý: Pin gắn sẵn trong máy được nhà sản xuất gắn '
        . 'để test máy nên dung lượng sẽ không còn nhiều và có thể hết nhanh hơn '
        . 'bình thường nên quý khách có thể thay mới để sử dụng lâu dài nhé'
    ),
    array(
        'title' => 'Gà Chạy Dây Cót - Gà Con Biết Nhảy T1',
        'content' => 'ĐẶC ĐIỂM NỔI BẬT
♘ Đồ chơi gà con có thể nhảy các thức hoạt động đơn giản mô phỏng hình những con gà con 
cực kì dễ thương đồ chơi phù hợp cho trẻ từ 18 tháng tuổi trở lên, lúc này bé cần quan sát 
học hỏi để phát triển tư duy + trí nhớ.'
    )
);
?>
<?php
require 'lib/template.php';
get_header();
?>
<div id="content">
    <?php  
    foreach ($list_product as $item) {
    ?>
    <h1><?php echo $item['title'];  ?></h1>
    <p><?php echo $item['content'];  ?></p>
    <?php }?>
</div>
<?php
get_footer();
?>
