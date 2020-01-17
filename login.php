  <?php 
include('koneksi.php');
if(isset($_POST['login'])){
  $username = mysql_real_escape_string(htmlentities($_POST['username']));
  $password = mysql_real_escape_string(htmlentities(sha1($_POST['password'])));
 

  $sql = mysql_query("SELECT * FROM user WHERE username='$username'") or die(mysql_error());
  $data=mysql_fetch_array($sql);
  $cek=mysql_num_rows($sql);

  if($cek>=1){
    
      $_SESSION['level']=$data['level'];
      $_SESSION['username']=$username;
      switch ($data['level']) {
        case 'admin':
          header("location:admin/index.php");
          break;
          case 'user':
          header("location:admin/tampilan.php");
          break;
        default:
          echo "Eror";
          break;
      }
  }
  else{
    //echo "gagal Login";
    echo '<div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>uppss password atau username salah</strong></div>';
  }
}
?>
  <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="" method="POST">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit" name="login">Log in</button> 
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                 <h1><i class="fa fa-ambulance"></i> Puskesmas Pringgasela</h1>
                  <p>©2018 Gontang Ragil Prakasa All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>