      <title>Puskesmas Pringgasela</title>
      <?php
      include '../koneksi.php';
        $query4=mysql_query("SELECT nomorc FROM tallerc where idc In(Select Max(idc)From tallerc)Order By idc Desc") or die (mysql_error());
        $a3=mysql_fetch_assoc($query4);
        $a33 = implode($a3)
      ?>
       <!-- TallerA -->
       <?php
      include '../koneksi.php';
        $query1=mysql_query("SELECT nomor FROM tallera where id In(Select Max(id)From tallera)Order By id Desc") or die (mysql_error());
        $a=mysql_fetch_assoc($query1);
        $a1 = implode($a)
      ?>
      <!-- Taller B -->
      <?php
        include '../koneksi.php';
        $query3=mysql_query("SELECT nomorb FROM tallerb where idb In(Select Max(idb)From tallerb)Order By idb Desc") or die (mysql_error());
        $a11=mysql_fetch_assoc($query3);
        $a2 = implode($a11);
      ?>
<style type="text/css">
  .font{
    font-size: 120;
  }
/*  .body{
    background: linear-gradient(white, blue);
  }*/
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
    .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
</style>
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <?php
    $show=mysql_query("SELECT informasi FROM informasi where idinfo In(Select Max(idinfo)From informasi)Order By idinfo Desc") or die (mysql_error());
      $a4=mysql_fetch_assoc($show);
      $a4 = implode($a4)
  ?>

<body onload="startTime()" class="body">
<script type="text/javascript">
  
  function startTime()
{   var today=new Date();
    var weekday=new Array(7);
    var weekday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
    var monthname=new Array(12);
    var monthname=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
    var dayname=weekday[today.getDay()];
    var day=today.getDate();
    var month=monthname[today.getMonth()]; 
    var year=today.getFullYear();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    h=checkTime(h);
    m=checkTime(m);
    s=checkTime(s);
    document.getElementById('clocktime').innerHTML=dayname+", "+day+"-"+month+"-"+year+", "+h+":"+m+":"+s;
    t=setTimeout(function(){startTime()},500);
}
// function checkTime to add a zero in front of numbers < 10
function checkTime(i)
{   if(i<10){i="0"+i;}
    return i;
}
</script>
    <div class="container-fluid bg-1 text-center">
      <h3>PUSKESMAS PRINGGASELA</h3>
        <img src="images/puskesmas.png" class="img-circle" alt="Bird" width="100" height="100">
      <h3 id="clocktime"></h3>
    </div>
  </br>
    <div class="container-fluid bg-3 text-center">
      <div class="col-md-3 col-md-offset-1">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                      <h3 class="panel-title">Loket A</h3>
                      </div>
                      <div class="panel-body">
                        <div class="font"><center>
                        <?php
                          echo "A-";echo $a1;
                        ?>
                      </center></div>
                  </div>           
              </div>
    </div>
    <div class="col-md-4">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                      <h3 class="panel-title">Loket B</h3>
                      </div>
                      <div class="panel-body">
                        <div class="font"><center>
                        <?php
                          echo "B-"; echo $a2;
                        ?>
                      </center></div>
                  </div>             
            </div>
        </div>
    <div class="col-md-3">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                      <h3 class="panel-title">Loket C</h3>
                      </div>
                      <div class="panel-body">
                        <div class="font"><center>
                        <?php
                          echo "C-";echo $a33;
                        ?>
                      </center></div>
                  </div>           
            </div>
    </div>

    </div>
    <div class="container-fluid bg-2 text-center">
      <h3>Informasi</h3>
        <p><?php echo "$a4"; ?></p>
    </div>
    

</body>

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