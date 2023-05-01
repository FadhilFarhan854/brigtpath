<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    public function index(){
        $account = Account::all();
        return view('test.index', compact(['account']));
    }
    public function create(){
        return view ('/Signin');
    }
    public function store(Request $request){
        
        Account :: create($request -> except(['_token', 'Submit']));
        
        return redirect ('/');
    }

    public function authentication(){
        $server = "localhost";
        $username="root";
	    $pass="";
	    $dbname="brightpaths";
	
	$conn = mysqli_connect($server, $username, $pass, $dbname);

	if(!$conn){
		die("connection failed : ". mysqli_connect_error());
	}

        if (isset($_POST["Submit"])){
            $username = $_POST["username"];
            $password = $_POST["pass"];

            $result = mysqli_query($conn, "Select * From account WHERE nama = '$username'");


            if(mysqli_num_rows($result) === 1){

                $row = mysqli_fetch_assoc($result);
                if($password == $row["password"]){
                    return redirect('/LamanHomePage');
                    exit;
                }
                
            }
            return redirect('/');

            
        }
    }
    
    

}
