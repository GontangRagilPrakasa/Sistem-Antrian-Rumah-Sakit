<?php
session_start();
include "../koneksi.php";
mysql_query("delete from tallera");
echo "<meta http-equiv=refresh content='0;url=TellerA.php'>";
?>