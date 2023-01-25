<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Files;
use App\Beneficios;
use App\Models\Carrusel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['principals'] = Files::all()->where('Type','principal');
        $dataB['beneficios']= Beneficios::all()->where('Type', 'beneficio');
        return view('home', $data, $dataB);

        
        
    }
}
