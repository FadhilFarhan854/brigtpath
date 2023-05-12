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
            {{-- <img src="Asset/logo.jpeg" alt="" style="width: 128.03px " > --}}
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Help</a>
        </nav>
    </header>
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