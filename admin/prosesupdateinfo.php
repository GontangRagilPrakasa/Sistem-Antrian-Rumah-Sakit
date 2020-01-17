<?php 
if(isset($_POST['simpan'])){
	include '../koneksi.php';
	$informasiasli= $_GET['informasi'];

	$informasi=$_POST['informasi'];
	$update= mysql_query("UPDATE informasi SET informasi='$informasi' WHERE idinfo='4'") or die(mysql_error());
	if($update){
		header("location:informasi.php");
	}
	else {
		echo "gagal";
		//echo '<script>window.history.back()</script>';
	}
}

?>