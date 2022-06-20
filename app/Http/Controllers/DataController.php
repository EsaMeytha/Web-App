<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function index()
    {
    	// mengambil data dari table data
    	$data = DB::table('data')->get();
 
    	// mengirim data input ke view home
    	return view('home',['data' => $data]);
 
    }
}
