<?php
	include('admincp/modules/config.php');
	$sql="select * from tintuc where id_baiviet='$_GET[id]' limit 1";
	$run_tintuc=mysqli_query($con, $sql);
	$row_tintuc=mysqli_fetch_array($run_tintuc);
	echo $row_tintuc['noidung'];
?>