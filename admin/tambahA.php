<?php
session_start();
include '../koneksi.php';

error_reporting(0);
				$query2=mysql_query("SELECT nomor FROM tallera where id In(Select Max(id)From tallera)Order By id Desc") or die (mysql_error());
				$aa=mysql_fetch_assoc($query2);
				$ab = implode($aa);
				echo "$ab";
				$ab=$ab+1;
		        $new = mysql_query("INSERT into tallera(id,nomor)values('$id','$ab')");
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
				$antrian = $ab;
				$panjang=strlen($ab);
				$adaantrian =1;
				
				include 'panggilA.php';

?>
