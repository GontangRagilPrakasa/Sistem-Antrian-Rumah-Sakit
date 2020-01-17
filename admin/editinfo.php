<?php
      if(isset($_POST['simpan'])){
        include '../koneksi.php';
        $infolama= $_GET['informasi'];

        $infobaru=$_POST['informasi'];
        $update= mysql_query("UPDATE infromasi SET infromasi='$infobaru' WHERE informasi='$infolama'") or die(mysql_error());
        // if($update){
        //   header("location:informasi.php");
        // }
        // else {
        //   echo "gagal";
        //   //echo '<script>window.history.back()</script>';
        // }
      }
    ?>