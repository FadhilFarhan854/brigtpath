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

    
    

}
