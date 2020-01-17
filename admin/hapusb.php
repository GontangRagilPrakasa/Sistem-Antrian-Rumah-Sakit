<?php
session_start();
include "../koneksi.php";
mysql_query("delete from tallerb");
echo "<meta http-equiv=refresh content='0;url=TellerB.php'>";
?>