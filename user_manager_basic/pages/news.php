<?php  
$list_news = array(
  array(
      'title' => 'BMW CE04 - xe điện phong cách viễn tưởng về Việt Nam',
      'content' => 'Thaco BMW Motorrad vừa nhập về lô hàng BMW CE04 từ Đức. '
      . 'Xe đang trong quá trình hoàn tất các thủ tục đăng kiểm, dự kiến bán '
      . 'ra thị trường trong vài tháng tới. Hãng chưa thông tin giá bán của mẫu xe này.'
  ),  
  array(
      'title' => 'Mua ôtô chỉ để trưng bày - thú vui của giới siêu giàu',
      'content' => 'Video ghi cảnh mẫu xe siêu sang được cẩu lên căn penthouse của '
      . 'một chung cư cao cấp ở Phúc Kiến, Trung Quốc, nhận hơn 240.000 lượt thích '
      . 'trên mạng xã hội. Quá trình bắt đầu từ khi chiếc Ghost còn lơ lửng cách mặt'
      . ' đất vài mét cho đến khi được đưa lên quá lan can bằng kính và đặt xuống ở ban công.'
  ),
  array(
      'title' => 'Mitsubishi Triton thế hệ mới tăng kích thước, thêm công nghệ',
      'content' => 'Mẫu bán tải thế hệ thứ 6 bắt đầu bán ở quốc gia Đông Nam Á với động cơ mạnh hơn, kích thước tăng.'
  )
);
?>
<?php
require 'lib/template.php';
get_header();
?>
<div id="content">
    <?php foreach ($list_news as $item) {
    ?>
    <h1><?php echo $item['title'];  ?></h1>
    <p><?php echo $item['content'];  ?></p>
    <?php }?>
</div>
<?php
get_footer();
?>

