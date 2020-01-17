<?php
session_start();
include "../koneksi.php";
mysql_query("delete from tallerc");
echo "<meta http-equiv=refresh content='0;url=TellerC.php'>";
?>
