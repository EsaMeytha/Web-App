<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $total_pending = Product::where('status','=','0')->count();
        $total_approved = Product::where('status','=','1')->count();
        $total_rejected = Product::where('status','=','2')->count();
        $total_reserve = Product::count();
        return view('home',compact('total_pending','total_approved','total_rejected','total_reserve'));
    }

    public function adminHome(){
        $total_pending = Product::where('status','=','0')->count();
        $total_approved = Product::where('status','=','1')->count();
        $total_rejected = Product::where('status','=','2')->count();
        $total_reserve = Product::count();
        return view('admin-home',compact('total_pending','total_approved','total_rejected','total_reserve'));
    }

    public function superadminHome(){
        return view('superadmin-home');
    }

    public function viewapproved(){
        $total_pending = Product::where('status','=','0')->count();
        $total_approved = Product::where('status','=','1')->count();
        $total_rejected = Product::where('status','=','2')->count();
        $total_reserve = Product::count();
        $items = Product::select('*')
                        ->where('status','=','1')
                        ->get();
        return view('pages.total.totalapproved',['items' => $items],compact('total_pending','total_approved','total_rejected','total_reserve'));
    }

    public function viewrejected(){
        $total_pending = Product::where('status','=','0')->count();
        $total_approved = Product::where('status','=','1')->count();
        $total_rejected = Product::where('status','=','2')->count();
        $total_reserve = Product::count();
        $items = Product::select('*')
                        ->where('status','=','2')
                        ->get();
        return view('pages.total.totalrejected',['items' => $items],compact('total_pending','total_approved','total_rejected','total_reserve'));
    }

    public function viewpending(){
        $total_pending = Product::where('status','=','0')->count();
        $total_approved = Product::where('status','=','1')->count();
        $total_rejected = Product::where('status','=','2')->count();
        $total_reserve = Product::count();
        $items = Product::select('*')
                        ->where('status','=','0')
                        ->get();
        return view('pages.total.totalpending',['items' => $items],compact('total_pending','total_approved','total_rejected','total_reserve'));
    }
}
