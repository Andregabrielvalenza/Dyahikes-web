<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class WebController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function destinos()
    {
        return view('destinos');
    }

    public function tours()
    {
        return view('tours');
    }

    public function graciasCustomizar()
    {
        return view('gracias-customizar');
    }

    public function aboutus()
    {
        return view('about-us');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function termsConditions()
    {
        return view('terms-conditions');
    }

    public function graciasReservar()
    {
        return view('gracias-reservar');
    }

    public function graciasComprar()
    {
        return view('gracias-comprar');
    }

    public function completarReserva()
    {
        return view('completar-reserva');
    }

    public function nuestrosTours()
    {
        return view('nuestros-tours');
    }

    public function Customize()
    {
        return view('customize');
    }

    public function detalleTours()
    {
        return view('detalle-tours');
    }

    public function generatePDF()
    {  
        $pdf = PDF::loadView('myPDF');
        $pdf->setPaper('A4');
    
        return $pdf->download('itsolutionstuff.pdf');
    }

}
