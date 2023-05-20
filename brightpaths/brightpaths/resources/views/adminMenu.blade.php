<!DOCTYPE html>
<?php 
session_start();

if(!isset($_SESSION["Login"])){
  return redirect('/');;}
?> 
<script>
  alert = "Login dulu";
</script>
<?php ?> 


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sider Menu Bar CSS</title>
    <link rel="stylesheet" href="style20.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>My App</header>
  <ul>
    <li><a href="/pemesananAdmin"><i class="fas fa-link"></i>Pemesanan</a></li>
    <li><a href="/approval"><i class="fas fa-stream"></i>approval</a></li>
    <li><a href="/karyawan"><i class="fas fa-calendar-week"></i>karyawan</a></li>
    
  </ul>
</div>
<section></section>

  </body>
</html>