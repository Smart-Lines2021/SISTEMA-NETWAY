<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    
      $precioDelDolar = $this->valorDelDolar();
      return view('admin.layout.home', compact("precioDelDolar"));
    }


    public function valorDelDolar(){
        $client = new \Goutte\Client();
        $url = "https://www.google.com/search?q=precio+del+dolar+hoy&rlz=1C5CHFA_enMX939MX939&oq=precio+del+dola&aqs=chrome.1.69i57j69i59j0i433j0j0i433l2j69i60l2.6215j0j4&sourceid=chrome&ie=UTF-8";
        $crawler = $client->request('GET', $url);
        $valor= $crawler->filter('div > div > div .BNeawe .iBp4i')->text();
       
        $valor = substr($valor,0,5);
        return $valor;
    }
}
