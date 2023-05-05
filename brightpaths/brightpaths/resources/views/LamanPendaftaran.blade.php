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
          <div class="custom_select" nama= "jenis_kelamin">
            <select>
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
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
</body>
</html>