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
</head>
<body>
  {{-- header --}}
  <header>
  <div class="container">
    <div class="row">
      <div class="col">
    <header class="header">
    {{-- <header class="d-flex flex-wrap align-items-center justify-content-center justify-content--py-3 mb-4 border-bottom"> --}}
      <div class="">
        <img src="{{ asset('Asset/logo.jpeg') }} " alt="" class="foto">
      </div>

      <ul class="justify-content-end mb-md-0">
        <li><a href="#" class="nav-link px-2">Logout</a></li>
        <li><a href="#" class="nav-link px-2 link-secondary">Help</a></li>
        <li><a href="#" class="nav-link px-2">About Us</a></li>
      </ul>

      <div class="justify-content-end">
        <a href="" class="btn btn-dark"> Book in 60 second</a>
      </div>
    {{--</header>--}}
  </div>
</div>
</div>
  </header>
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
        <div class="foto1">
    <img src="{{ asset('Asset/foto1.png') }} " alt="" class="foto">

        </div>
    </div>

</div>

  </main>
  {{-- footer --}}
  <footer>

  </footer>

</body>
</html>
