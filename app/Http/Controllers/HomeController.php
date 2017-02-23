<?php
namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        $pictures = [
            "http://www.dicasdacarol.com.br/wp-content/uploads/2016/05/Casamento-1.jpg"
        ];
        $env = ['picture' => array_rand($pictures)];
        return view('home', $env);
    }

    public function redirectToPontofrio(\Request $request)
    {
        return redirect('http://www.pontofrio.com.br/Site/ListaGerenciadaLandingPage.aspx?idListaCompra=592592');
    }

    public function rsvp(\Request $request)
    {

    }
}