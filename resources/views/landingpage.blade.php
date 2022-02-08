<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    {{-- css --}}
    <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    {{-- js --}}
    <link href="{{ asset('../img/logosmkn.png') }}" rel="icon">
    <title>PPDB SMKN 1 Majalaya | {{ $title }}</title>
  </head>
  <body>
 {{--navbar  --}}
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
      <div class="container">
  <a class="navbar-brand" href="#"><img src="../img/logosmkn.png"  width="80" height="70" alt="SMKN 1 MAJALAYA"> <span style="color: white">SMKN 1 MAJALAYA</span> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link {{ ($title === "Home")? 'active' : '' }}" href="#slide">Beranda</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#jalur">Jalur & Kuota PPDB</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
            Registrasi
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item {{ ($title === "Register")? 'active' : '' }}" href="/daftar">Daftar</a>
            <a class="dropdown-item {{ ($title === "Login")? 'active' : '' }}" href="/masuk">Masuk</a>
          </div>
        </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
          Informasi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#about">Tentang</a>
          <a class="dropdown-item" href="#informasi">Kontak</a>
        </div>
      </li>
    </ul>
  </div>
</div>
</div>
</nav>
{{-- akhir navbar --}}

      {{-- carousel --}}
      <section class="slide" id="slide">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/ppdb.png"  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/ppdb2.png"  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/ppdb3.png"  class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
    </section>
      {{-- akhir carousel --}}
      {{-- selamat datang --}}
      <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                  <br>
                  <br>
                  <br>
                    <h1 class="text-center">{{ $selamatdatang }}</h1>
                    <h1 class="text-center">{{ $peserta }}</h1>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img src="../img/rk.jpeg" class="img-circle" alt="Ridwan Kamil">
                    <h2 class="text-center">{{ $rk }}</h2>
                    <h5 class="text-center">{{ $gubernur }}</h5>
                    <p>{{ $prk }}</p>
                </div>
                <div class="col-sm-4">
                    <img src="../img/pa_dani.png" class="img-circle" alt="Pak Dani">
                    <h2 class="text-center">{{ $dani }}</h2>
                    <h5 class="text-center">{{ $kepsek }}</h5>
                    <p>{{ $pdka }}</p>
                </div>
                <div class="col-sm-4">
                  <img src="../img/bu_lilis.png" class="img-circle" alt="Bu Lilis">
                  <h2 class="text-center">{{ $lilis }}</h2>
                  <h5 class="text-center">{{ $ketuappdb }}</h5>
                  <p>{{ $plilis }}</p>
                </div>
            </div>
        </div>
      </section>
      {{-- akhir selamat datang --}}
      {{-- wakasek --}}
      <br>
      <br>
      <br>
      <section class="about" id="about">
        <div class="container">
          <div class="col-sm-12">
            <h1 class="text-center">{{ $wakepsek }}</h1>
            <hr>
          </div>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                      <div class="col-md-4">
                        <img src="../img/bulilis.png" width="350" alt="">
                      </div>
                      <div class="col-md-4">
                        <img src="../img/pauje.png" width="350" alt="">
                      </div>
                      <div class="col-md-4">
                        <img src="../img/patatang.png" width="350" alt="">
                      </div>
                    </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                      <div class="col-md-4">
                        <img src="../img/bulilis.png" width="350" alt="">
                      </div>
                      <div class="col-md-4">
                        <img src="../img/pauje.png" width="350" alt="">
                      </div>
                      <div class="col-md-4">
                        <img src="../img/pasubarja.png" width="350" alt="">
                      </div>
                    </div>
              </div>
            </div>
          </div>
          
        </div>
      </section>
      {{-- akhir wakasek --}}

      {{-- tabel --}}
     
      <table class="table table-hover" id="jalur">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kompetensi Keahlian</th>
            <th scope="col">KETM</th>
            <th scope="col">ABK</th>
            <th scope="col">Kondisi Tertentu</th>
            <th scope="col">Prioritas Jarak</th>
            <th scope="col">Perpindahan Tugas / Anak Guru</th>
            <th scope="col">Prestasi Kejuaraan</th>
            <th scope="col">Rapor Unggulan</th>
            <th scope="col">Rapor Umum</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Teknik Komputer dan Jaringan</td>
            <td>14</td>
            <td>3</td>
            <td>5</td>
            <td>11</td>
            <td>5</td>
            <td>5</td>
            <td>38</td>
            <td>27</td>
            <td>108</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Teknik Elektronika dan Industri</td>
            <td>14</td>
            <td>3</td>
            <td>5</td>
            <td>11</td>
            <td>5</td>
            <td>5</td>
            <td>38</td>
            <td>27</td>
            <td>108</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Teknik Bisnis Sepedah Motor</td>
            <td>14</td>
            <td>3</td>
            <td>5</td>
            <td>11</td>
            <td>5</td>
            <td>5</td>
            <td>38</td>
            <td>27</td>
            <td>108</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Teknik Multimedia</td>
            <td>14</td>
            <td>3</td>
            <td>5</td>
            <td>11</td>
            <td>5</td>
            <td>5</td>
            <td>38</td>
            <td>27</td>
            <td>108</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Teknik Instalasi tenaga Listrik</td>
            <td>14</td>
            <td>3</td>
            <td>5</td>
            <td>11</td>
            <td>5</td>
            <td>5</td>
            <td>38</td>
            <td>27</td>
            <td>108</td>
          </tr>
        </tbody>
      </table>
      {{-- akhir tabel --}}

      {{-- jurusan --}}
      <section class="jurusan">
        <div class="container">
          <div class="col-sm-12">
            <h1 class="text-center">{{ $jurusan }}</h1>
            <hr>
          </div>
          <div class="row">
            <div class="col">
              <button type="button" class="btn btn-outline-primary">
                <img src="../img/jurusan/TKJ.png" alt="">
            </div> 
            <div class="col">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="../img/bannertkj/1.png" class="rounded" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../img/bannertkj/2.png" class="rounded" class="d-block w-100" alt="...">
                </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>
          <div class="row">
            <div class="col">
              <button type="button" class="btn btn-outline-danger">
                <img src="../img/jurusan/TEI.png" width="550" alt="">
              </button>
            </div> 
            <div class="col">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="../img/bannertei/1.png" class="rounded" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../img/bannertei/2.png" class="rounded" class="d-block w-100" alt="...">
                </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>
          <div class="row">
            <div class="col">
              <button type="button" class="btn btn-outline-warning">
                <img src="../img/jurusan/MM.png" alt="">
            </div> 
            <div class="col">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="../img/bannermm/1.png" class="rounded" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../img/bannermm/2.png" class="rounded" class="d-block w-100" alt="...">
                </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>
          <div class="row">
            <div class="col">
              <button type="button" class="btn btn-outline-success">
                <img src="../img/jurusan/TBSM.png" alt="">
            </div> 
            <div class="col">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="../img/bannertbsm/1.png" class="rounded" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../img/bannertbsm/2.png" class="rounded" class="d-block w-100" alt="...">
                </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>
          <div class="row">
            <div class="col">
              <button type="button" class="btn btn-outline-secondary">
                <img src="../img/jurusan/TITL.png" alt="">
            </div> 
            <div class="col">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="../img/bannertitl/1.png" class="rounded" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../img/bannertitl/2.png" class="rounded" class="d-block w-100" alt="...">
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {{-- akhr jurusan --}}

      {{-- informasi --}}
      <section class="informasi" id="informasi">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <h4>{{ $jurusan }}</h4>
              <p><a href="">{{ $tkj }}</a></p>
              <p><a href="">{{ $tei }}</a></p>
              <p><a href="">{{ $mm }}</a></p>
              <p><a href="">{{ $tbsm }}</a></p>
              <p><a href="">{{ $titl }}</a></p>
            </div>
            <div class="col-sm-4">
              <h4>Program Unggulan Sekolah</h4>
              <p><a href="">Lembaga Sertifikasi Profesi</a></p>
              <p><a href="">Bursa Kerja Khusus</a></p>
            <h4>Link Terkait</h4>
            <p><a href="">Info PPDB Jawa Barat</a></p>
            <p><a href="">Daftar PPDB Online Jawa Barat</a></p>
          </div>
          <div class="col-sm-4">
            <div class="alamat">
            <h3>SMK Negeri 1 Majalaya</h3>
            <p> Jl. Idris No.99 Rancajigang Majalaya Kabupaten Bandung-Jawa Barat-40382</p>
            <p> <span style="font-weight: bold"> phone:</span> 022-5952443</p>
            <p style="line-height: 3px"> <span style="font-weight: bold"> Email: </span>smkn1majalaya@gmail.com</p>
          </div>
        </div>
        </div>
        </div>
      </section>
      {{-- akhir informasi --}}
      
      {{-- footer --}}
      <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <p>&copy; Copyright by <span style="color: chartreuse">19552011151_MUHAMMAD FIRMAN HERMAWAN_TIF RM 18 CID-B</span>. All Rights Reserved</p>
                </div>
            </div>
        </div>
        </footer>
      {{-- akhir footer --}}
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script> --}}
  </body>
</html>