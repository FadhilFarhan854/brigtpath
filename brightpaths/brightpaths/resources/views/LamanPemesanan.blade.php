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
          <a class="navbar-brand" href="#"><img src="{{ asset('Asset/logo.jpeg') }}" alt="" class="foto" style="width: 20%"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav" style="color:white">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#" style="color:white">Logout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-secondary" href="https://docs.google.com/document/d/12Gm37zjjLY_ztxgjz1LDyrXLAVxongs9/edit?usp=share_link&ouid=116704987552569170973&rtpof=true&sd=true"style="color:white">Help</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"style="color:white">About Us</a>
              </li>
            </ul>
          </div>
          <div class="justify-content-end">
            <a href="/LamanPemesanan" class="btn btn-light">Book in 60 second</a>
          </div>
        </nav>
      </div></header>
    {{-- <header class="header">
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">About US</a>
            <a href="#">Help</a>
        </nav>
    </header> --}}
<form action="/store5" method="POST">
    @csrf
<div class="wrapper">
    <div class="title">
        Reservation  Form
    </div>

    <div class="form">
    <div class="inputfield">
        <label>Nama Lengkap</label>
        <input type="text" class="input" name="nama_lengkap">
    </div>
        <div class="inputfield">
        <label>Nomer Handphone</label>
        <input type="text" class="input" name="nomor_hp">
    </div>
    <div class="inputfield">
        <label>Lokasi</label>
        <input type="text" class="input" name="Lokasi">
    </div>

    <div class="title">
        Detail Pemesanan
    </div>

        <div class="inputfield">
        <label>Service Detail</label>
        <input type="hidden" id="namas" class="input" name="service_detail">

            <button type="button" class="btn" onclick="price(0)" >Kamar</button>
            <button type="button" class="btn"  onclick="price(1)"  >Rumah</button>
            <button type="button"  class="btn" onclick="price(2)"  >Kantor</button>
        </div>

        <div class="inputfield">
        <label>Catatan</label>
        <input type="text" class="input" name="catatan">
        </div>

        <div class="inputfield">
            <label>Metode Pembayaran</label>
            <input type="hidden" name="pembayaran" value="cash">
            <div class="custom_select" name= "">
                <select>
                <option value="Cash">Cash</option>
                </select>
            </div>
        </div>

        <div class="title">
            Ringkasan Pemesanan
        </div>

        <div class="class = kotak1" >
            <div> <p>Harga Layanan </p> <p id="pricess" >0</p> </div>
            <div> <p>Total harga </p> <p id="pricess2">0</p> </div>


        </div>

    <div class="inputfield terms">
        <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
        </label>
        <p>Agreed to terms and conditions</p>
    </div>
    <div class="inputfield">
        <button type="submit" value="Pesan Sekarang" class="btn" name="pemesanan"> Pesan Sekarang </button>
    </div>
    <div class="inputfield">
        <button type="submit" value="Pesan Sekarang" class="btn" name="pesanan_selesai"> Pesanan selesai </button>
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
            document.getElementById("namas").value = "kamar";
            document.getElementById("pricess").innerHTML = "50000";
            document.getElementById("pricess2").innerHTML = "80000";
        }else if(prc == 1){
            document.getElementById("namas").value = "rumah";
            document.getElementById("pricess").innerHTML = "100000";
            document.getElementById("pricess2").innerHTML = "150000";
        }else{
            document.getElementById("namas").value = "kantor";
            document.getElementById("pricess").innerHTML = "200000";
            document.getElementById("pricess2").innerHTML = "250000";
        }


    }
</Script>
</body>

</html>
