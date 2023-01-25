<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Files;
use App\Beneficios;
use App\Imagenes;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        $data['principals'] = Files::all();
        $data['beneficios'] = beneficios::all();
        $data['contacts'] = Imagenes::where('Tipo', '=', 'Banner Email')->first();
        return view('myWelcome', $data);

        // $contac['contacts']= Imagenes::all();
        // return view('/contact', $contac);
    }

    public function myIndex()
    {
        $data['principals'] = Files::all();
        $data['beneficios'] = beneficios::all();
        $data['contacts'] = Imagenes::where('Tipo', '=', 'Banner Email')->first();
        return view('myWelcome', $data);

        // $contac['contacts']= Imagenes::all();
        // return view('/contact', $contac);
    }

    public function contact(){
        $contac['contacts']= Imagenes::where('Tipo', '=', 'Banner Contact')->first();
        return view('myContact', $contac);
    }

    public function imeis(){
        return view('imeis');
    }
}
