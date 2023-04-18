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
            <a href="#">Login</a>
            <a href="#">Giftcard</a>
            <a href="#">Help</a>
        </nav>

        <form action="#" class="search-bar">
            <input type="text" placeholder="search...">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>
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
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input" name="email">
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="no_telephone">
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="adress"></textarea>
       </div> 
      <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" class="input" name = "kode_pos">
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