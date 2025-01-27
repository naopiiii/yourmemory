<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pm_post;

class PicturememoryController extends Controller
{
    //
    function index()
    {
        $tables = Pm_post::all();
        // dd($tables);
        return view('pm.pm',compact('tables'));
        
    }

    function create()
    {
        return view('pm.pm_create');
    }
}
