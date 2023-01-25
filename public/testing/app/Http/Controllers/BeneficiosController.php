<?php

namespace App\Http\Controllers;

use App\Beneficios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeneficiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['beneficios'] = beneficios::all()->where('Type','beneficios');
        return view('beneficios', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('Foto')) {
            $file = request()->file('Foto');
            $file->move('storage/uploads/beneficios',$file->getClientOriginalName());
            $title = $request->post('Title');
            $subtitle = $request->post('SubTitle');
            $description = $request->post('Description');
            $type = $request->post('type');
            $nameFile = $file->getClientOriginalName();
           $x = Beneficios::insert(['Title'=>$title,'SubTitle'=>$subtitle,'Description'=>$description,'Foto'=>$nameFile, 'Type'=>$type]);
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
     * @param  \App\beneficios  $beneficios
     * @return \Illuminate\Http\Response
     */
    public function show(beneficios $beneficios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\beneficios  $beneficios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $beneficios = Beneficios::findOrFail($id);
        return view('beneficiosedit', compact('beneficios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\beneficios  $beneficios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $nameFile = null;
        $title = $request->post('Title');
        $subtitle = $request->post('SubTitle');
        $description = $request->post('Description');
        
            $dataFile=request()->except(['_token','_method']);
            if ($request->hasFile('Foto')) {
                $datFile= beneficios::findOrfail($id);
                Storage::delete('storage/uploads'.$datFile->Foto);
                $datFile = request()->file('Foto');
                $datFile->move('storage/uploads/beneficios/',$datFile->getClientOriginalName());
                $type = $request->post('type');
                $nameFile = $datFile->getClientOriginalName();
                
            }
            
            beneficios::where('id','=',$id)->update([
                    'Foto'=>$nameFile, 'Title'=>$title,'SubTitle'=>$subtitle,'Description'=>$description
                ]);
            $beneficios = beneficios::findOrfail($id);
            return view('beneficiosedit', compact('beneficios'));


        // $beneficios = request()->except(['_token','_method']);
        // beneficios:: where('id','=',$id)->update($beneficios);

        // $beneficios = beneficios::findOrfail($id);
        // return view('beneficiosedit', compact('beneficios'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\beneficios  $beneficios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        beneficios::destroy($id);
        return redirect('beneficios');
    }
}
