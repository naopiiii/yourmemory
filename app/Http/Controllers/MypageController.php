<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MypageController extends Controller
{
    //
    function index()
    {
        $tables = User::find(1);
        // dd($tables);
        return view('mp.mp',compact('tables'));
        
    }
}
