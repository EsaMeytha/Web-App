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
        try{
            Product::where('id',$id)->update([
                'status'=> 2
            ]);

            \Session::flash('Sukses','Data berhasil tidak di Approved');
        }catch (\Exception $item){
            \Session::flash('gagal',$item->getMessage());
        }
        return redirect()->back();
    }

    public function update(ProductRequest $request, $id)
    {
        //
    }
}
