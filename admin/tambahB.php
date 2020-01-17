<?php
session_start();
include '../koneksi.php';

error_reporting(0);
				$query2=mysql_query("SELECT nomorb FROM tallerb where idb In(Select Max(idb)From tallerb)Order By idb Desc") or die (mysql_error());
				$aa1=mysql_fetch_assoc($query2);
				$ab1= implode($aa1);
				echo "$ab";
				$ab1=$ab1+1;
		        $new = mysql_query("INSERT into tallerb(idb,nomorb)values('$id','$ab1')");
				//echo "<h1>Nomor Antrian $nobaru di loket $loket</h1>";	
				if($new){
						
 						//setTimeout('location.href=\"TallerA.php"' ,60000);
						
					//header("location:TellerA.php");
					//echo "<script>window.history.back()</script>";
				}
				else{
					echo "gagal";
				}
				//$nomor = (string)$ab;
					//$loket = $d4['loket'];
				$antrian = $ab1;
				$panjang=strlen($ab1);
				$adaantrian =1;
				
				include 'panggilB.php';

?>
