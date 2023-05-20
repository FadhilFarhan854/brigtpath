<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>

<style>
    body {
        padding: 0px;
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    
    table {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 800px;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    
    th{
        padding-right: 15px;
        padding-left: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        padding: 10px;
    }
    td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    #header {
        background-color: #16a085;
        color: #fff;
    }
    
    h1 {
        font-weight: 600;
        text-align: center;
        background-color: #16a085;
        color: #fff;
        padding: 10px 0px;
    }
    
    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }
</style>

<body>

    <h1>Pemesanan</h1>
    <hr>
<?php  
session_start();
$server="localhost";
$username="root";
$pass="";
$dbname="brightpaths";


$conn = mysqli_connect($server, $username, $pass, $dbname);

$alamat = $_SESSION ["alamat"];
$query = "SELECT * from pemesanan WHERE Lokasi = '$alamat'";


$hasil = mysqli_query($conn, $query);

if(!$conn){
    die("connection failed : ". mysqli_connect_error());
}


?>
    <table>
        <tr id="header">
            <th>id</th>
            <th>nama lengkap</th>
            <th>nomor hp</th>
            <th>Lokasi</th>
            <th>service_detail</th>
        </tr>
        <?php 
        foreach($hasil as $value){
            $id = $value['id'];
			$nama_lengkap = $value['nama_lengkap'];
			$nomor_hp = $value['nomor_hp'];
            $Lokasi = $value['Lokasi'];
            $service_detail = $value['service_detail'];
        
        ?>
        
        <tr>
				<td >
					<?php
					echo "$id";
					?>
				</td>
				<td >
					<?php
					echo "$nama_lengkap";
					?>
				</td>
			    <td >
					<?php
					echo "$nomor_hp";
					?>
				</td>
				<td >
					<?php
					echo "$Lokasi";
					?>
				</td>
				<td >
					<?php
					echo "$service_detail";
					?>
				</td>
				

			</tr>
        <?php 
        }
    ?>  
    
    </table>
    
    <form action="" method="Get">
        <input type="text" name ="ids" label ="id">
        <input type="submit" name = "accept" value="accept">
        
    </form>
    <?php 
    
    if (isset($_GET['accept'])){
        //ambil id
    $ids = $_GET['ids'];
    $emails = $_SESSION ["email"];
    $id_karyawan =  $_SESSION ["id_karyawan"];
    //ambil kolom perbaris
    $result = mysqli_query($conn, "Select * From pemesanan WHERE id = '$ids'");
    $row = mysqli_fetch_assoc($result);
    
    //query update stat karyawan & hapus dari pemesanan karyawan
    $query2 = "UPDATE karyawan SET status = 'unavailable' WHERE email = '$emails'";
    $query4 = "UPDATE pemesanan_admin SET id_karyawan = '$id_karyawan' WHERE id = $ids";
    $query3 = "DELETE FROM `pemesanan` WHERE id = $ids";
    $tambah = mysqli_query($conn, $query2);
    $rest = mysqli_query($conn, $query4);
    $hapus = mysqli_query($conn, $query3);

    //query update stat pemesanan admin

    
    
}
    ?>

</body>

</html>