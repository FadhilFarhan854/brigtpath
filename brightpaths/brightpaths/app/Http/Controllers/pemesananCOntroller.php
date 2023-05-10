<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\pemesanan;
use App\Models\pesan2;
use Illuminate\Http\Request;

class pemesananCOntroller extends Controller
{
    public function store3(Request $request){
        
        
        pemesanan :: create($request -> except(['_token', 'Submit']));
        pesan2 :: create($request -> except(['_token', 'Submit']));
        return redirect ('/LamanPemesanan');
    }

    public function store5(){
        session_start();

        $server="localhost";
	    $username="root";
	    $pass="";
	    $dbname="brightpaths";
	
	    $conn = mysqli_connect($server, $username, $pass, $dbname);

	    if(!$conn){
		    die("connection failed : ". mysqli_connect_error());
	    }

        if(isset($_POST['pemesanan'])){
            $nama_lengkap = $_POST['nama_lengkap'];
            $nomor_hp = $_POST['nomor_hp'];
            $Lokasi = $_POST['Lokasi'];
            $service_detail = $_POST['service_detail'];
            $catatan = $_POST['catatan'];
            $pembayaran = $_POST['pembayaran'];
            $id_user = $_SESSION["id"];

            $query = "INSERT INTO `pemesanan` (`id`, `created_at`, `updated_at`, `nama_lengkap`, `nomor_hp`, `Lokasi`, `service_detail`, `Catatan`, `pembayaran`, `id_user`) VALUES (NULL, NULL, NULL, '$nama_lengkap', '$nomor_hp', '$Lokasi', '$service_detail', ' $catatan', '$pembayaran', '$id_user')"; 
            $query2 = "INSERT INTO `pemesanan_admin` (`id`, `created_at`, `updated_at`, `nama_lengkap`, `nomor_hp`, `Lokasi`, `service_detail`, `Catatan`, `pembayaran`, `id_user`) VALUES (NULL, NULL, NULL, '$nama_lengkap', '$nomor_hp', '$Lokasi', '$service_detail', ' $catatan', '$pembayaran', '$id_user')"; 
            $results = mysqli_query($conn, $query);
            $results2 = mysqli_query($conn, $query2);
            return redirect("/LamanPemesanan");
        }
        if(isset($_POST['pesanan_selesai'])){
            $id_user = $_SESSION["id"];
            $query3 = "UPDATE pemesanan_admin SET status_pesanan ='finished' where id_user='$id_user'";
            $result6 = mysqli_query($conn, "SELECT * From pemesanan_admin WHERE id_user='$id_user'");
            $row = mysqli_fetch_assoc($result6);
            $idk = $row["id_karyawan"];
            
            $query4 = "UPDATE karyawan SET status ='available'  where id='$idk'";
            $results = mysqli_query($conn, $query3);
            $results2 = mysqli_query($conn, $query4);
            
        }
        

    }

    
    


}
