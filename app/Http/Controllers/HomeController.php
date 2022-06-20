<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DataRequest;
use App\Models\Data;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Data::all();
        return view('home')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reserve');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataRequest $request)
    {
        $data = $request->all();
        Data::create($data);
        return redirect()->route('home');
    }

    public function adminHome(){
        return view('admin-home');
    }

    public function superadminHome(){
        return view('superadmin-home');
    }

    public function reserve(){
        return view('reserve');
    }

    public function notreceived(){
        return view('pages.not-received-home');
    }

    public function pending(){
        return view('pages.pending-home');
    }
}
