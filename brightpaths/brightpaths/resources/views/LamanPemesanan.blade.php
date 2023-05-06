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
<form action="/store3" method="POST">
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
            <div class="custom_select" name= "pembayaran">
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
        <input type="submit" value="Pesan Sekarang" class="btn" >
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
