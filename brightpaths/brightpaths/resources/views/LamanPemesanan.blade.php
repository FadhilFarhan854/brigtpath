<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="Stylependaftaran.css">
</head>
<body>
<div class="black">
    <header class="header">
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">About US</a>
            <a href="#">Help</a>
        </nav>
    </header>
<form action="/store2" method="POST">
    @csrf
<div class="wrapper">
    <div class="title">
        Reservation  Form
    </div>

    <div class="form">
    <div class="inputfield">
        <label>Nama Lengkap</label>
        <input type="text" class="input" name="fullname">
    </div>  
        <div class="inputfield">
        <label>Nomer Handphone</label>
        <input type="text" class="input" name="NoHape">
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
        <div class="custom_select" nama= "ServiceDetail">
            <select>
            <option value="Kamar">Kamar</option>
            <option value=""></option>
            <option value=""></option>
            </select>
        </div>
        </div> 

        <div class="inputfield">
        <label>Catatan</label>
        <input type="text" class="input" name="Catatan">
        </div> 

        <div class="inputfield">
            <label>Metode Pembayaran</label>
            <div class="custom_select" nama= "MetodePembayaran">
                <select>
                <option value="Cash">Cash</option>
                <option value="Ovo">Ovo</option>
                <option value="Gopay">Gopay</option>
                <option value="ShopeePay">ShopeePay</option>
                </select>
            </div>
        </div> 

        <div class="title">
            Ringkasan Pemesanan
        </div>

        <div class="class = kotak1">
            <p>Harga Layanan</p> <p>Harga</p> <br>
            <p>Total harga</p> <p>Harga</p>
        </div>

    <div class="inputfield terms">
        <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
        </label>
        <p>Agreed to terms and conditions</p>
    </div> 
    <div class="inputfield">
        <input type="submit" value="Pesan Sekarang" class="btn">
    </div>
    </div></form>
    <div class="addbox">
    
    </div>
</div>	
	</div>
</body>
</html>