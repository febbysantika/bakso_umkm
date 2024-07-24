<?php  
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Bakso Andalan</title>
  </head>
  <body>

  <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4"><span class="font-weight-bold">BAKSO ANDALAN</span></h1>
          <hr>
          <p class="lead font-weight-bold">Silahkan Nikmati Pesanan Anda  <br> 
          Enjoy Your Meal</p>
        </div>
      </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
      <nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container">
        <a class="navbar-brand text-white" href="user.php"><strong>Bakso</strong> Andalan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="user.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="menu_pembeli.php">DAFTAR MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan_pembeli.php">PESANAN ANDA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->

  <!-- Menu -->    
  <div class="container">
        <div class="judul text-center mt-5">
          <h3 class="font-weight-bold">BAKSO Andalan Food Categories</h3>
        </div>
        <h4 class="font-weight-bold">Penawaran Hari Ini</h4>

        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <img class="card-img-top float-right" style="width: 8rem;" src="images/mercon.jpeg" alt="Card image cap">
                <h5 class="card-title font-weight-bold">Bakso Mercon</h5>
                <p class="card-text">Disc 15% belanja minimum Rp.50.000</p>
                <a href="daftar_menu.php" class="btn btn-primary">LIHAT DAFTAR MENU</a>
                <a href="pesanan.php" class="btn btn-success">LIHAT PESANAN</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <img class="card-img-top float-right" style="width: 8rem;" src="images/ayambakar.jpg" alt="Card image cap">
                <h5 class="card-title font-weight-bold">Ayam Bakar</h5>
                <p class="card-text">Diskon Rp5rb Tanpa belanja minimum</p>
                <a href="daftar_menu.php" class="btn btn-primary">LIHAT DAFTAR MENU</a>
                <a href="pesanan.php" class="btn btn-success">LIHAT PESANAN</a>
              </div>
            </div>
          </div>
        </div> <br>

        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <img class="card-img-top float-right" style="width: 8rem;" src="images/mieayamkomplit.jpeg" alt="Card image cap">
                <h5 class="card-title font-weight-bold">Mie Ayam Komplit</h5>
                <p class="card-text">Beli Mie Ayam Komplit gratis es teh manis</p>
                <a href="daftar_menu.php" class="btn btn-primary">LIHAT DAFTAR MENU</a>
                <a href="pesanan.php" class="btn btn-success">LIHAT PESANAN</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <img class="card-img-top float-right" style="width: 8rem;" src="images/baksolava.jpeg" alt="Card image cap">
                <h5 class="card-title font-weight-bold">Bakso Lava</h5>
                <p class="card-text">15.000</p>
                <a href="daftar_menu.php" class="btn btn-primary">LIHAT DAFTAR MENU</a>
                <a href="pesanan.php" class="btn btn-success">LIHAT PESANAN</a>
              </div>
            </div>
          </div>
        </div> <br>

        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <img class="card-img-top float-right" style="width: 8rem;" src="images/mieayamkomplit.jpeg" alt="Card image cap">
                <h5 class="card-title font-weight-bold">Mie Ayam Komplit</h5>
                <p class="card-text">Beli Mie Ayam Komplit gratis es teh manis</p>
                <a href="daftar_menu.php" class="btn btn-primary">LIHAT DAFTAR MENU</a>
                <a href="pesanan.php" class="btn btn-success">LIHAT PESANAN</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <img class="card-img-top float-right" style="width: 8rem;" src="images/baksolava.jpeg" alt="Card image cap">
                <h5 class="card-title font-weight-bold">Bakso Lava</h5>
                <p class="card-text">15.000</p>
                <a href="daftar_menu.php" class="btn btn-primary">LIHAT DAFTAR MENU</a>
                <a href="pesanan.php" class="btn btn-success">LIHAT PESANAN</a>
              </div>
            </div>
          </div>
        </div> <br>
      </div>
  <!-- Akhir Menu -->

  <!-- Awal Footer -->
      <hr class="footer">
      <div class="container">
        <div class="row footer-body">
          <div class="col-md-6 d-flex float-left ml-5">
            <h5>Jl. Pancing, Medan, Sumatera Utara
            <br>Buka Jam <strong>11:00 - 23:00</strong></h5> <br>
          </div>

          <div class="icon-contact float-right">
            <label class="font-weight-bold"><h5>Follow Us</h5></label>
              <a href="#"><img src="images/icon/fb.png" class="mr-5 ml-5 " data-toggle="tooltip" title="Facebook"></a>
              <a href="#"><img src="images/icon/ig.png" class="mr-5" data-toggle="tooltip" title="Instagram"></a>
              <a href="#"><img src="images/icon/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
          </div>
        </div>
      </div>
  <!-- Akhir Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>
</html>
<?php } ?>