<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User1;

class User1Controller extends Controller
{
    public function index()
    {
        $user1s = User1::get();

        return view("user1", ['user1s'=>$user1s]);
    }    
   
    
    
    
        
    
}
