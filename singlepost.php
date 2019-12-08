<?php  include_once("model/giay.php");
include_once("heade.php"); 
if (isset($_REQUEST['maSingle'])) {
	$maSingle   = $_REQUEST['maSingle'];
	$single= tin::getSingle($maSingle);
}
?>
<div class="container" style="width: 900px !important;">
	<div style="    padding-top: 25px;">
		<h2 style="    font-size: 30px;
		font-weight: 600;
		color: brown;
		text-align: center;
		"><?php echo $single->TenTin; ?></h2>
		<p style="    text-align: center;
		font-size: 13px;"> <b style=" color: blueviolet;
		font-style: italic;"><?php echo  $single->TacGia; ?></b> Ngày đăng: <span style="color: brown;
		font-style: italic;"><?php echo $single->NgayDang; ?> </span></p>
	</div>
	<img style="    padding: 2% 0;
	margin: 0 auto;
	display: block;"src="admin/img_upload/<?php echo $single->AnhTin; ?>" alt="">
	<p align="left" class="content"><?php echo $single->NoiDungTin ?>
</p>

</div>
