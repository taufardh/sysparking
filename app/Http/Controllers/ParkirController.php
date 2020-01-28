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
        $parkir = Parkir::find($id);
        $masuk = $parkir->created_at->timestamp;
        $keluar = $parkir->updated_at->timestamp;
        $waktu_parkir = $keluar - $masuk;
        
        $total_jam = floor($waktu_parkir / 3600);
        $total_menit = floor(($waktu_parkir % 3600) / 60);
        $total_detik = ($waktu_parkir % 360) % 60;
        return view('pages.biaya')->with('parkir', $parkir)->with('total_jam', $total_jam)->with('total_menit', $total_menit)->with('total_detik', $total_detik);
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
        $parkir = Parkir::find($id);
        return view('pages.keluar')->with('parkir', $parkir);
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
        
        //Create Post
        $parkir = Parkir::find($id);
        $parkir->plat_nomor = $request->input('plat_nomor');
        $parkir->status = 'keluar';
        $parkir->bayar = 2000;
        $parkir->save();
        
        $parkir = Parkir::find($id);
        $parkir->plat_nomor = $request->input('plat_nomor');
        $parkir->status = "keluar";
        
        $masuk = $parkir->created_at->timestamp;
        $keluar = $parkir->updated_at->timestamp;
        $waktu_parkir = $keluar - $masuk;
        
        $total_jam = ceil($waktu_parkir / 3600);
        if($total_jam<= 2){
            $parkir->bayar = 2000;
        }
        else{
            $parkir->bayar = (2000 + (($total_jam-2)*500));
        }

        $parkir->save();
        
        //echo "cek";
        return redirect()->route('parkirs.show', $id)->with('success', 'Parkir Keluar');
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
