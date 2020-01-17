<?php
  include '../koneksi.php';
  $query3=mysql_query("SELECT nomorb FROM tallerb where idb In(Select Max(idb)From tallerb)Order By idb Desc") or die (mysql_error());
  $a1=mysql_fetch_assoc($query3);
  $a2 = implode($a1);
?>
<!-- Taller A -->
<?php
$query1=mysql_query("SELECT nomor FROM tallera where id In(Select Max(id)From tallera)Order By id Desc") or die (mysql_error());
  $a=mysql_fetch_assoc($query1);
  $a1 = implode($a)
?>
<!-- Taller C -->
<?php
include '../koneksi.php';
  $query4=mysql_query("SELECT nomorc FROM tallerc where idc In(Select Max(idc)From tallerc)Order By idc Desc") or die (mysql_error());
  $a3=mysql_fetch_assoc($query4);
  $a33 = implode($a3)
?>
<!DOCTYPE>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MTP | Sedoso Inc </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <?php
    include 'profil.php';
    include 'sidebar.php';
    include 'menuprofil.php'; ?>
      <div id='layersuara' style='display:none'></div>
                  <script src="jquery-1.11.3.js"></script>
                  <script type="text/javascript">
                    $(document).ready(function(){
                        $("#Panggil2").click(function(){
                          $.ajax({
                            type:"POST",
                            url:"tambahB.php",
                            data:"id=2",
                            success:function(html){
                              $("#layerl2").html(""+html)
                            }})
                          // $.ajax({
                            // type:"POST",
                            // url:"respon_administrasi.php",
                            // data:"id=1",
                            // success:function(html){
                              // $("#layersuara").html("")
                              // $("#layersuara").html(html)
                            // }})
                        })
                      })
                  </script> 
  <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                  <div class="count" id='layerl1'><?php echo $a1; ?></div>
                  <h3>TALLER A</h3>
                  <p>Jumlah Antrian</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count" id='layerl2'><?php echo $a2; ?></div>
                  <h3>TALLER B</h3>
                  <p>Jumlah Antrian</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                  <div class="count" id='layerl3'><?php echo $a33; ?></div>
                  <h3>TALLER C</h3>
                  <p>Jumlah Antrian</p>
                </div>
              </div>
             
                

              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pilih Loket<small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <ul class="list-group">
                      <a href="TellerA.php"><li class="list-group-item">
                        Loket A
                      </li></a>
                      <a href="TellerB.php"><li class="list-group-item">
                        Loket B
                      </li></a>
                      <a href="TellerC.php"><li class="list-group-item">
                        Loket C
                      </li></a>
                      </ul>
                   
                  </div>
                </div>
              </div>
            </div>
            <!--  <table class="table table-striped table-hover ">
              <thead>
                <tr>
                  <th>id</th>
                  <th>No urut</th>
                </tr>
              </thead>
            
               <?php 
                  

                  $query=mysql_query("SELECT * FROM tallerb ORDER BY idb DESC") or die (mysql_error());
                  if(mysql_num_rows($query)==0){
                    echo '<tbody>
                    <tr class="active">
                      <td colspan="5">Tidak ada antrian yang di entrikan </td>
                    </tr>
                  </tbody>';
                     
                  }
                  else{
                    while($data=mysql_fetch_assoc($query)){
                    echo '<tbody>
                    <tr class="active">';
                    echo '<td>'.$data['idb'].'</td>';
                    echo '<td>'.$data['nomorb'].'</td>';
                    echo '<td>';
                  }
                }

                  ?>

                  </table> -->
                
                  <button  class="btn btn-success" type="button" value='Teller 2' id='Panggil2' name='Panggil2' >Tambah Antrian</button> 
                   <a href="hapusb.php"><button  class="btn btn-success" >Reset</button></a> 
                  
          </div>
        </div>

  </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
