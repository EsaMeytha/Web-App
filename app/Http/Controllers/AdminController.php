<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class AdminController extends Controller
{
    public function index(){
        $items = Product::all();
        return view('pages.admin.index')->with([
            'items' => $items
        ]);
    }

    public function create()
    {
        $items = Product::all();
        return view('pages.admin.create')->with([
            'items' => $items
        ]);
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();
        Product::create($data);
        return redirect()->route('admin.index');
    }

    public function approved($id){
            Product::where('id',$id)->update([
                'status' => 1
            ]);

            return redirect()->back();
       
    }

    public function rejected($id){
            Product::where('id',$id)->update([
                'status'=> 2
            ]);

            return redirect()->back();
    }

    public function update(ProductRequest $request, $id)
    {
        //
    }

        public function Aviewapproved(){
        $total_pending = Product::where('status','=','0')->count();
        $total_approved = Product::where('status','=','1')->count();
        $total_rejected = Product::where('status','=','2')->count();
        $total_reserve = Product::count();
        $items = Product::select('*')
                        ->where('status','=','1')
                        ->get();
        return view('pages.Atotal.Atotalapproved',['items' => $items],compact('total_pending','total_approved','total_rejected','total_reserve'));
    }

    public function Aviewrejected(){
        $total_pending = Product::where('status','=','0')->count();
        $total_approved = Product::where('status','=','1')->count();
        $total_rejected = Product::where('status','=','2')->count();
        $total_reserve = Product::count();
        $items = Product::select('*')
                        ->where('status','=','2')
                        ->get();
        return view('pages.Atotal.Atotalrejected',['items' => $items],compact('total_pending','total_approved','total_rejected','total_reserve'));
    }

    public function Aviewpending(){
        $total_pending = Product::where('status','=','0')->count();
        $total_approved = Product::where('status','=','1')->count();
        $total_rejected = Product::where('status','=','2')->count();
        $total_reserve = Product::count();
        $items = Product::select('*')
                        ->where('status','=','0')
                        ->get();
        return view('pages.Atotal.Atotalpending',['items' => $items],compact('total_pending','total_approved','total_rejected','total_reserve'));
    }
}
