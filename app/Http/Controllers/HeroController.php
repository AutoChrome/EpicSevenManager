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
    public function show($hero)
    {
        $hero = Hero::findOrFail($hero);
        return view('hero', ['hero' => $hero]);
    }
    
    public function index(){
        return view('hero');
    }
}

?>