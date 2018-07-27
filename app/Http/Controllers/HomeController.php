<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\tbl_procedimientos;
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
        return view('home')->with(['User'=>tbl_procedimientos::where('id', Auth::user()->unidad_id)->first(),]);
    }

      
    public function procedimiento($val)
    {
        return view('cptavisor.viewPdf')->with(['User'=>tbl_procedimientos::where('id', Auth::user()->unidad_id)->first(),'val'=>$val,]);
    }
}
