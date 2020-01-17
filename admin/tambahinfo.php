<?php 
if(isset($_POST['simpan'])){
	include '../koneksi.php';
	$informasi=$_POST['informasi'];
	$input=mysql_query("INSERT INTO informasi (informasi) VALUES ('$informasi')") or die (mysql_error());
	if($input){
	echo "<script>window.history.back()</script>";
	}

}

?>