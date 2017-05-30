<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ilc_mahasiswa_nilai;
use  App\ilc_level;

class utepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa_nilai = ilc_mahasiswa_nilai::with('level')->get();
        
        foreach($mahasiswa_nilai as $key=>$item)
        {
           
            $mahasiswa_nilai[$key]['ilcmhsnilai'] = $item->ilcmhsnilaiReading+$item->ilcmhsnilaiListening;
        }
        //return view('utep')->with('mahasiswa_nilai',$mahasiswa_nilai);
        return response()->view(['success' => true, 'obj' => $mahasiswa_nilai]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $level = ilc_level::all();
        return response()->view(['success' => true, 'obj' => $level]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                //nama model 
        $nilai = new ilc_mahasiswa_nilai;

        //masukin data dari user ke variable $nilai
        $nilai->ilcmhsnilaiId= $request->ilcmhsnilaiId;
        $nilai->ilcmhsnilaiMhsNiu = $request->ilcmhsnilaiMhsNiu;
        $nilai->lcmhsnilaiMhsNiu= $request->ilcmhsnilaiMhsNiu;
        $nilai->ilcmhsnilaiListening = $request->ilcmhsnilaiListening;
        $nilai->ilcmhsnilaiReading= $request->ilcmhsnilaiReading;
        $nilai->ilcmhsnilaiSempId = $request->ilcmhsnilaiSempId;

        $save = $nilai->save();
        if($save)
        {
             return response()->view(['success' => true]);
        }
        else
        {
             return response()->view(['success' => false]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['success' => true, 'obj' => Pegawai::with('golongan')->FindOrFail($id)]);
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
        $nilai = ilc_mahasiswa_nilai::find($id);
        $nilai->ilcmhsnilaiId= $request->ilcmhsnilaiId;
        $nilai->ilcmhsnilaiMhsNiu = $request->ilcmhsnilaiMhsNiu;
        $nilai->lcmhsnilaiMhsNiu= $request->ilcmhsnilaiMhsNiu;
        $nilai->ilcmhsnilaiListening = $request->ilcmhsnilaiListening;
        $nilai->ilcmhsnilaiReading= $request->ilcmhsnilaiReading;
        $nilai->ilcmhsnilaiSempId = $request->ilcmhsnilaiSempId;

        $save = $nilai->save();
        if($save) // kalau berhasil simpan ke db
        {
            //kasih respon success = true
        return response()->json(['success' => true]);
        }
        else //selain dr itu
        {
            //kasih respon success = false
        return response()->json(['success' => false]);
        }
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
