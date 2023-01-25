<?php

namespace App\Http\Controllers;

use App\Imagenes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['imagenes'] = Imagenes::all()->where('Type','imagenes');
        return view('img', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('img');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = $request->post('Tipo');
        $file=request()->except(['_token','_method']);
        if ($request->hasFile('Foto')) {
            $file = request()->file('Foto');
            $flag = Imagenes::where('Tipo', '=', $type)->exists();
            if ($flag) {
                $dataBanner = Imagenes::where('Tipo', '=', $type)->first();
                $idBanner = $dataBanner->id;
                Imagenes::destroy($idBanner);
                Storage::delete('storage/uploads'.$dataBanner->Foto);
            }
            $file->move('storage/uploads/imagenes',$file->getClientOriginalName());
            $tipo = $request->post('Tipo');
            $nameFile = $file->getClientOriginalName();
           $x = Imagenes::insert(['Foto'=>$nameFile,'Tipo'=>$tipo]);
           if ($x) {
               return back()->with('success', 'hecho');
               
           }else{
               return back()->with('error', 'No hecho');
           }
       
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Imagenes  $imagenes
     * @return \Illuminate\Http\Response
     */
    public function show(Imagenes $imagenes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Imagenes  $imagenes
     * @return \Illuminate\Http\Response
     */
    public function edit(Imagenes $imagenes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Imagenes  $imagenes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imagenes $imagenes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Imagenes  $imagenes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imagenes $imagenes)
    {
        //
    }
}
