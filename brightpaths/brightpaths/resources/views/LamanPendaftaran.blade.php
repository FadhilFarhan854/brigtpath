<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="Stylependaftaran.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
  <div class="black">
    <header><div class="container-fluid" style="margin-right:0%;margin-left:0%; background-color:#1d1d1d; " >
        <nav class="navbar navbar-expand-lg navbar-light " >
          <a class="navbar-brand" href="#"><img src="{{ asset('Asset/logo.jpeg') }}" alt="" class="foto" style="width: 15%"></a>
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
            <a href="/LamanPemesanan" class="btn-light">Book in 60 second</a>
          </div>
        </nav>
      </div></header>

    {{-- <header class="header">
        <nav class="navbar">
            <img src="Asset/logo.jpeg" alt="" style="width: 128.03px " >
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Help</a>
        </nav>
    </header> --}}
<form action="/store2" method="POST">
    @csrf
<div class="wrapper">
    <div class="title">
      Registration Form
    </div>

    <div class="form">
      <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name="nama_depan">
      </div>
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" name="nama_belakang">
      </div>
      <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="password">
      </div>

        <div class="inputfield">
          <label>Gender</label>

          <input type="hidden" id="namas" class = "input" name="jenis_kelamin">
          <button type="button" class="btn" onclick="price(0)" >Male</button>
          <button type="button" class="btn"  onclick="price(1)"  >Female</button>

      </div>
      <div class="inputfield">
        <label>Email</label>
        <input type="text" class="input" name="email">
    </div>
      <div class="inputfield">
        <label>phone Number</label>
        <input type="text" class="input" name="no_telephone">
    </div>
      <div class="inputfield">
        <label>Adress</label>
        <input type="text" class="input" name="adress">
    </div>
      <div class="inputfield">
        <label>Postal code</label>
        <input type="text" class="input" name="kode_pos">
    </div>

      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
      </div>
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div>
    </div></form>
    <div class="addbox">
    </div>
</div>
	</div>
  <Script>
    function price(prc){
        var prices;
        if(prc == 0){
            document.getElementById("namas").value = "male";
        }else if(prc == 1){
            document.getElementById("namas").value = "female";

        }


    }
</Script>
</body>
</html>
