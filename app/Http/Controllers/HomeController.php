<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\tbl_procedimientos;
use App\tbl_registros;
use Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        //->with([
        //     'User'=>tbl_procedimientos::where('id', Auth::user()->unidad_id)->first(),
        //     'ftoResg'=>tbl_registros::where('Unidad_id', Auth::user()->unidad_id)->get(),
        // ]);
        return view('home');
    }

      
    public function procedimiento()
    {
        //Carga el fomrato del Procedimiento
        return view('cptavisor.viewPdf')->with(['User'=>tbl_procedimientos::where('id', Auth::user()->unidad_id)->first(),]);
 
    }

}
