<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\pemesanan;
use Illuminate\Http\Request;

class pemesananCOntroller extends Controller
{
    public function store3(Request $request){
        session_start();
        
        pemesanan :: create($request -> except(['_token', 'Submit']));
        
        return redirect ('/LamanPemesanan');
    }

    
    


}
