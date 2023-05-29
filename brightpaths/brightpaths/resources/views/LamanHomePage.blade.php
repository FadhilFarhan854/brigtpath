<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('js/HomePage.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <title>Home Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>
<?php 
session_start();
$id = $_SESSION["id"];
?>
{{-- header --}}
<div class="container-fluid" style="margin-right:0%;margin-left:0%; background-color:#1d1d1d; " >
    <nav class="navbar navbar-expand-lg navbar-light " >
      <a class="navbar-brand" href="#"><img src="{{ asset('Asset/logo.jpeg') }}" alt="" class="foto" style="width: 20%"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav" style="color:white">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/" style="color:white">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-secondary" href="https://docs.google.com/document/d/12Gm37zjjLY_ztxgjz1LDyrXLAVxongs9/edit?usp=share_link&ouid=116704987552569170973&rtpof=true&sd=true"style="color:white">Help</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/AboutUs"style="color:white">About Us</a>
          </li>
        </ul>
      </div>
      <div class="justify-content-end">
        <a href="/LamanPemesanan" class="btn btn-light">Book in 60 second</a>
      </div>
    </nav>
  </div>

{{-- main --}}
  <main>
    <div class="background1">
        <div class="hitam">
            <div class="hitamteks"><h1>HIGHER QUALITY HOME CLEANING SERVICES</h1>
            <br>
            <br>
            <br>
            <br>
            <h2 style="font-size: 25px">LET US CONNECT YOU WITH A CLEANER YOU’LL LOVE, AT A CLICK OF A BUTTON</h2></div>

        </div>


    </div>
    <div class="background2">
        <div class="hitam">
        <div class="atas">
            <div class="lebihhitam">
                <div class="fotologo">
                    <img src="{{ asset('Asset/logo.jpeg') }} " alt="" class="foto">
                </div>
                <div class="hurufsamping">
                    <div class="1"><h1>BRIGHT PATH</h1><br><br></div>
                    <div class="2"><h2>Dont stress,
                        wel’ll Handle The mess</h2><br>
                        <br>
                        <br>
                        <br></div>
                      <div class="3"><h3>YOUR TRUST AND SECURITY ARE OUR PRIORITY</h3>
                      </div>

                </div>
            </div>
        </div>
        <div class="bawah">
            <div class="kotak">
                <img src="{{ asset('Asset/time.png') }} " alt="" class="foto">
                <h5>SAVES YOU TIME</h5>
                <p>Bright Path helps you live smarter, giving you time to focus on what's most important
                </p>
            </div>
            <div class="kotak">
                <img src="{{ asset('Asset/safety.png') }} " alt="" class="foto">
              <h5>SAFETY FIRST</h5>
              <p>We rigorously vet all of our Cleaners, who undergo identity checks as well as in-person interviews.</p>
            </div>
            <div class="kotak">
                <img src="{{ asset('Asset/cashfree.png') }} " alt="" class="foto"><br><br>
              <h5>CASH-FREE PAYMENT</h5>
              <p>Pay securely online only when the cleaning is complete.</p>
            </div>
            <div class="kotak">
                <img src="{{ asset('Asset/quality.png') }} " alt="" class="foto">
              <h5>ONLY THE BEST QUALITY</h5>
              <p>Our skilled professionals go above and beyond on every job.</p>
        </div>
        </div>
    </div>


</div>
<div class="background3">
    <div class="item">
        <div class="judulterakhir">
            <h1>OUR FEATURE</h1>
        </div>
        <div class="up">
            <div class="FOTO">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('Asset/foto1.png') }} " alt="" class="foto">
                    <div class="card-body">
                      <h5 class="card-title">berbagai layanan paket</h5>
                      <p class="card-text">Layanan yang disediakan BrightPath adalah paket Hemat,
                        paket Premium,paket Sultan</p>
                    </div>
                </div>
            </div>
            <div class="FOTO2">
                <div class="card" style="width: 19.5rem;">
                    <img src="{{ asset('Asset/foto2.png') }} " alt="" class="foto">
                    <div class="card-body">
                      <h5 class="card-title">pembersihan luar & dalam</h5>
                      <p class="card-text">Bagian rumah yang dibersihkan oleh karyawan BrightPath
                        seperti Halaman rumah,ruang tamu,ruang makan dan lain-lain </p>
                </div>
                </div>
    </div>

</div>
<div class="down">
    <div class="FOTO3">
        <div class="card" style="width: 20rem;">
            <img src="{{ asset('Asset/foto3.png') }} " alt="" class="foto">
            <div class="card-body">
              <h5 class="card-title">Pemesanan Online</h5>
              <p class="card-text">Calon customer dapat memesan jasa BrightPath
                dengan cara memesan secara online sehingga customer tidak
                perlu membuang waktu untuk keluar dari rumah </p>
            </div>
          </div>
    </div>
      <div class="FOTO4">
        <div class="card "id="akhir" style="width: 19rem;">
            <img src="{{ asset('Asset/foto4.png') }} " alt="" class="foto1">
            <div class="card-body">
              <h5 class="card-title">jaminan keamanan</h5>
              <p class="card-text">sebelum kami mengirim jasa kami,
                kami memeriksa dengan cermat data diri dan kualitas kerja karyawan kami </p>

            </div>
          </div>
      </div>
</div>
</div>
</div>
</main>


  {{-- footer --}}
  <div class="container-fluid" style="color: white; margin-left:0%; margin-right:0%; background-color:#1d1d1d">
    <footer class="py-5">
      <div class="row">
        <div class="col-6 col-md-2 mb-3">
          <h5>Customer Care Line</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"></li>
            <li class="nav-item mb-2"></li>
            <li class="nav-item mb-2">Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257
            </a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "></a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "></a></li>
          </ul>
        </div>



        <div class="col-md-5 offset-md-1 mb-3" style="margin-left: 40%">
          <form>
            <h5>ingin Bergabung dengan housekeeper kami?</h5>

            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <a href="LamanPendaftaran" class="btn btn-light" style="font-size: 200%">JOIN US</a>



            </div><br>
            <p>FOLLOW US</p>
            <a href="#"><img src="{{ asset('Asset/instagram.png') }} " alt="" class="foto"></a>
            <a href="#"><img src="{{ asset('Asset/whatsapp.png') }} " alt="" class="foto"></a>
            <a href="#"><img src="{{ asset('Asset/facebook.png') }} " alt="" class="foto"></a>

          </form>
        </div>
      </div>

      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>&copy; All Copyright reserved by D’Hormes Company</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-body-emphasis" href=""><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
          <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
          <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        </ul>
      </div>
    </footer>
  </div>
  {{-- end footer --}}

</body>
</html>
