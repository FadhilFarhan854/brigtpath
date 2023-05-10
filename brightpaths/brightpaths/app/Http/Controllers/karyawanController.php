<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\calon_karyawan;
use Illuminate\Http\Request;

class karyawanController extends Controller
{
    public function index(){
        $karyawan = calon_karyawan ::all();
        return view('test.index', compact(['account']));
    }
    public function create(){
        return view ('/LamanPendafataran');
    }
    public function store2(Request $request){
        
        calon_karyawan :: create($request -> except(['_token', 'submit']));
        return redirect ('/LamanPendaftaran');
    }
    public function authk(){
        session_start();
        $server = "localhost";
        $username="root";
	    $pass="";
	    $dbname="brightpaths";
	
	$conn = mysqli_connect($server, $username, $pass, $dbname);

	if(!$conn){
		die("connection failed : ". mysqli_connect_error());
	}

        if (isset($_POST["Submit"])){
            $email = $_POST["email"];
            $password = $_POST["pass"];

            $result = mysqli_query($conn, "Select * From karyawan WHERE email = '$email'");
           
              $row = mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result) === 1){
               
                if($password == $row["password"]){
                   $_SESSION["id_karyawan"] = $row["id"];
                    $_SESSION ["Login"] = true; 
                    $_SESSION ["alamat"] = $row["adress"]; 
                    $_SESSION ["email"] = $row["email"]; 
                    
                  
                    return redirect('/pemesanan');
                   
                }
                
            }
            return redirect('/LoginKaryawan');

            
        }
    }
}
