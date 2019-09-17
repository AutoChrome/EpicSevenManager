<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;

class HeroController extends Controller 
{

    /**
   * Display a listing of the resource.
   *
   * @return Response
   */
    public function show(\App\Hero $hero)
    {
        return view('hero', ['hero' => $hero]);
    }
    
    public function index(){
        return view('hero');
    }
}

?>