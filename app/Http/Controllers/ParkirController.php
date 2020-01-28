<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parkir;

class ParkirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "Data Parkir";
        $parkirs = Parkir::orderBy('id','desc')->get();
        return view('pages.view')->with('parkirs', $parkirs)->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = "Parkir Masuk";
        return view('pages.masuk')->with('title',$title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'plat_nomor' => 'required',
            'status' => 'required',
            'bayar' => 'required'
        ]);
        
        //Create Post
        $parkir = new Parkir;
        $parkir->plat_nomor = $request->input('plat_nomor');
        $parkir->status = $request->input('status');
        $parkir->bayar = $request->input('bayar');
        $parkir->save();

        return redirect('/parkirs')->with('success', 'Parkir Masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
