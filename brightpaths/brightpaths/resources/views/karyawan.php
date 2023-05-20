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

    <h1>Karyawan</h1>
    <hr>
<?php  

$server="localhost";
$username="root";
$pass="";
$dbname="brightpaths";


$conn = mysqli_connect($server, $username, $pass, $dbname);
$query = "SELECT * from karyawan";


$hasil = mysqli_query($conn, $query);

if(!$conn){
    die("connection failed : ". mysqli_connect_error());
}


?>
    <table>
        <tr id="header">
            <th>id</th>
            <th>nama depan</th>
            <th>nama belakang</th>
            <th>jenis kelamin</th>
            <th>email</th>
            <th>nomer telp</th>
            <th>alamat</th>
            <th>kode pos</th>
            <th>status</th>
        </tr>
        <?php 
        foreach($hasil as $value){
            $id = $value['id'];
			$nama_depan = $value['nama_depan'];
			$nama_belakang = $value['nama_belakang'];
            $password = $value['password'];
            $jenis_kelamin = $value['jenis_kelamin'];
            $email = $value['email'];
            $no_telephone = $value['no_telephone'];
            $adress = $value['adress'];
            $kode_pos = $value['kode_pos'];
        ?>
        
        <tr>
				<td name = "id">
					<?php
					echo "$id";
					?>
				</td>
				<td name = "nama_depan">
					<?php
					echo "$nama_depan";
					?>
				</td>
			    <td name ="nama_belakang">
					<?php
					echo "$nama_belakang";
					?>
				</td>
				<td name="jenis_kelamin">
					<?php
					echo "$jenis_kelamin";
					?>
				</td>
				<td name="email">
					<?php
					echo "$email";
					?>
				</td>
				<td>
					<?php
					echo "$no_telephone";
					?>
				</td>
				<td>
					<?php
					echo "$adress";
					?>
				</td>
				<td>
					<?php
					echo "$kode_pos";
					?>
				</td>
                <td>
                    

				</td>
                

			</tr>
        <?php 
        }
    ?>  
    
    </table>
    


</body>

</html>