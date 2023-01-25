<?php

namespace App\Http\Controllers;

use App\Files;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['principals'] = Files::all()->where('Type','principal');
        return view('home', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
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
         if ($request->hasFile('Foto')) {
             $file = request()->file('Foto');
             $file->move('storage/uploads',$file->getClientOriginalName());
             $type = $request->post('type');
             $nameFile = $file->getClientOriginalName();
            $x = Files::insert(['Foto'=>$nameFile, 'Type'=>$type]);
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
     * @param  \App\files  $files
     * @return \Illuminate\Http\Response
     */
    public function show(files $files)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\files  $files
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $file = Files::findOrFail($id);
        return view('filesEdit', compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\files  $files
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataFile=request()->except(['_token','_method']);
        if ($request->hasFile('Foto')) {
            $datFile= Files::findOrfail($id);
            Storage::delete('storage/uploads'.$datFile->Foto);
            $datFile = request()->file('Foto');
            $datFile->move('storage/uploads',$datFile->getClientOriginalName());
            $type = $request->post('type');
            $nameFile = $datFile->getClientOriginalName();
            
        }

        Files::where('id','=',$id)->update($dataFile);

        $file=Files::findOrfail($id);
        return view('filesEdit', compact('file'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\files  $files
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Files::destroy($id);
        return redirect('home');
    }

    public function actualizar(Request $request, $id){
            $dataFile=request()->except(['_token','_method']);
            if ($request->hasFile('Foto')) {
                $datFile= Files::findOrfail($id);
                Storage::delete('storage/uploads'.$datFile->Foto);
                $datFile = request()->file('Foto');
                $datFile->move('storage/uploads',$datFile->getClientOriginalName());
                $type = $request->post('type');
                $nameFile = $datFile->getClientOriginalName();
                Files::where('id','=',$id)->update([
                    'Foto'=>$nameFile
                ]);
            }

            

            $file=Files::findOrfail($id);
            return view('filesEdit', compact('file'));

    }
}
