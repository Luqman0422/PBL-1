<?php 
  $id = $_GET['id'];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">
  <style type="text/css">
    @media(max-width: 992px;){
      img{display: none;}
    }
    body{background: #eee url(http://subtlepatterns.com/patterns/sativa.png);}
  }
  html,body{
    position: relative;
    height: 100%;
  }

  .login-container{
    position: relative;
    width: 300px;
    margin: 80px auto;
    padding: 20px 40px 40px;
    text-align: center;
    background: #fff;
    border: 1px solid #ccc;
  }

  #output{
    position: absolute;
    width: 300px;
    top: -75px;
    left: 0;
    color: #fff;
  }

  #output.alert-success{
    background: rgb(25, 204, 25);
  }

  #output.alert-danger{
    background: rgb(228, 105, 105);
  }


  .login-container::before,.login-container::after{
    content: "";
    position: absolute;
    width: 100%;height: 100%;
    top: 3.5px;left: 0;
    background: #fff;
    z-index: -1;
    -webkit-transform: rotateZ(4deg);
    -moz-transform: rotateZ(4deg);
    -ms-transform: rotateZ(4deg);
    border: 1px solid #ccc;

  }

  .login-container::after{
    top: 5px;
    z-index: -2;
    -webkit-transform: rotateZ(-2deg);
    -moz-transform: rotateZ(-2deg);
    -ms-transform: rotateZ(-2deg);

  }

  .avatar{
    width: 100px;height: 100px;
    margin: 10px auto 30px;
    border-radius: 100%;
    border: 2px solid #aaa;
    background-size: cover;
  }

  .form-box input{
    width: 100%;
    padding: 10px;
    text-align: center;
    height:40px;
    border: 1px solid #ccc;;
    background: #fafafa;
    transition:0.2s ease-in-out;

  }

  .form-box input:focus{
    outline: 0;
    background: #eee;
  }

  .form-box input[type="text"]{
    border-radius: 5px 5px 0 0;
    text-transform: lowercase;
  }

  .form-box input[type="password"]{
    border-radius: 0 0 5px 5px;
    border-top: 0;
  }

  .form-box button.login{
    margin-top:15px;
    padding: 10px 20px;
  }

  .animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
  }

  @-webkit-keyframes fadeInUp {
    0% {
      opacity: 0;
      -webkit-transform: translateY(20px);
      transform: translateY(20px);
    }

    100% {
      opacity: 1;
      -webkit-transform: translateY(0);
      transform: translateY(0);
    }
  }

  @keyframes fadeInUp {
    0% {
      opacity: 0;
      -webkit-transform: translateY(20px);
      -ms-transform: translateY(20px);
      transform: translateY(20px);
    }

    100% {
      opacity: 1;
      -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
      transform: translateY(0);
    }
  }

  .fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp;
  }

</style>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav" >
    <a href="index.php?page="><img src="img/logo2.png" width="200" class="logo" alt="" title="" /></a>
    <div style="margin-top: 100px;">
      <img src="img/image.png" width="50%" height="auto">
    </div>
    <p style="color: white;">Silahkan Login Terlebih Dauhulu</p>

  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about" style="width: 1000px; height: auto;">
      <div class="container">
        <div class="login-container">
          <div id="output"></div>
          <img src="img/ggrey.png" width="160px;" height="auto">
          <div class="form-box">
            <form action="ac_login.php?id=<?php echo "$id"; ?>" method="post">
              <input name="User" type="text" placeholder="username" required=""></input>
              <input name="Password" type="password" placeholder="password" required=""></input>
              <p>Captcha</p>
              <img src="captcha.php" alt="gambar" />
              <input name="nilaiCaptcha" value="" required="" />
              <button class="btn btn-info btn-block login" type="submit" name="but">Login</button>
            </form>
            <p style="font-size: 15px; margin-top: 10px; color: black;">Belum punya akun? <a href="RegisterUser.php?id=<?php echo "$id"; ?>&stat" style="text-decoration: none; color: black;">disini!</a></p>
          </div>
        </div>
        
      </div>
    </section>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

  </html>
