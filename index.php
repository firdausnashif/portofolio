<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portofolio NTRUS</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#home" class="navbar-brand page-scroll">NTRUS</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about" class="page-scroll">Tentang</a></li>
            <li><a href="#portfolio" class="page-scroll">Portofolio</a></li>
            <li><a href="#contact" class="page-scroll">Komentar</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="jumbotron text-center">
      <img src="img/pp.jpg" class="img-circle">
      <h1>Muhammad Nashif Firdaus</h1>
      <p>Gamer | Technical Support | Vaper</p>
    </div>

    <section class="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Tentang</h2>
            <hr>
          </div> 
        </div>
        <div class="row">
          <div class="col-sm-4">
            <p>Muhammad Nashif Firdaus lahir di Kebumen pada tanggal 5 November 2000. Disapa NTRUS karena kepanjangan dari Nitipuran Daus yang tinggal di Jalan Nitipuran No. 378 A Ngestiharjo, Kasihan Bantul. Hobi jalan - jalan di lingkungan outdoor dan juga Olahraga</p>
          </div>
          <div class="col-sm-4">
            <p>Memulai pendidikan di TK ABA Among Putro 2 selama 2 tahun. Lalu lanjut di SD Muhammadiyan Wirobrajan 3 Yogyakarta dari tahun 2007 hingga 2013. Setelah itu lanjut SMP di SMP Negeri 7 Yogyakarta hingga 2016 dan melanjutkan di SMK Negeri 2 Depok Sleman</p>
          </div>
          <div class="col-sm-4">
            <p>Memulai kerja di PT. SARANA INSAN MUDA SELARAS sebagai Technical Support dan juga kuliah di STMIK AKAKOM mengambil kelas karyawan. Pernah mengikuti lomba Matematika pada waktu SD dan Turnamen Futsal pada waktu SMP</p>
          </div>
        </div>
      </div>
    </section>

    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Portofolio</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <a href="" class="thumbnail">
              <img src="img/1.jpg" alt="Image" height="300" width="300">
            </a>
          </div>
          <div class="col-sm-3">
            <a href="" class="thumbnail">
              <img src="img/2.jpg" alt="Image" height="300" width="300">
            </a>
          </div>
          <div class="col-sm-3">
            <a href="" class="thumbnail">
              <img src="img/3.jpg" alt="Image" height="300" width="300">
            </a>
          </div>
          <div class="col-sm-3">
            <a href="" class="thumbnail">
              <img src="img/4.jpg" alt="Image" height="300" width="300">
            </a>
          </div>
          <div class="col-sm-3">
            <a href="" class="thumbnail">
              <img src="img/5.jpeg" alt="Image" height="100" width="100">
            </a>
          </div>
          <div class="col-sm-3">
            <a href="" class="thumbnail">
              <img src="img/6.jpeg" alt="Image" height="300" width="300">
            </a>
          </div>
          <div class="col-sm-3">
            <a href="" class="thumbnail">
              <img src="img/7.jpeg" alt="Image" height="300" width="300">
            </a>
          </div>
          <div class="col-sm-3">
            <a href="" class="thumbnail">
              <img src="img/8.jpeg" alt="Image" height="300" width="300">
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Komentar</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <form method="post" action="proses.php" id="form">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="nama anda">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="email anda">
              </div>
              <div class="form-group">
                <label>Pesan</label>
                <textarea class="form-control" name="pesan" id="pesan" rows="10" placeholder="ketikkan pesan anda"></textarea>
              </div>
              <button type="submit" name="result" id="result" class="btn btn-info"><i class="glyphicon glyphicon-send"></i> Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Komentar Anda</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3 col-sm-offset-1">
          <?php
          include "koneksi.php";
          $query="SELECT * FROM tb_comment";
          $result = mysqli_query($kon, $query);
          if(mysqli_num_rows($result) > 0)
          {
          while($row =mysqli_fetch_array($result))
          {
            echo "<hr>";
            echo "<br>";
            echo "Nama  : " . $row["nama"]."<br>";
            echo "E-mail : " . $row["email"]."<br>";
            echo "Pesan : " . $row["pesan"]. "<br>";
            echo "<br>";
          }
          }
          ?>
          <hr>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>NTRUS 2021</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/jquery.easing.1.3.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/script.js"></script>
  </body>
</html>