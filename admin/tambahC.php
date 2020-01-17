<?php
session_start();
include '../koneksi.php';

error_reporting(0);
				$query2=mysql_query("SELECT nomorc FROM tallerc where idc In(Select Max(idc)From tallerc)Order By idc Desc") or die (mysql_error());
				$aa2=mysql_fetch_assoc($query2);
				$ab2 = implode($aa2);
				echo "$ab";
				$ab2=$ab2+1;
		        $new2 = mysql_query("INSERT into tallerc(idc,nomorc)values('$id','$ab2')");
				//echo "<h1>Nomor Antrian $nobaru di loket $loket</h1>";	
				if($new2){
						
 						//setTimeout('location.href=\"TallerA.php"' ,60000);
						
					//header("location:TellerA.php");
					//echo "<script>window.history.back()</script>";
				}
				else{
					echo "gagal";
				}
				//$nomor = (string)$ab;
					//$loket = $d4['loket'];
				$antrian = $ab2;
				$panjang=strlen($ab2);
				$adaantrian =1;
				
				include 'panggilC.php';

?>
