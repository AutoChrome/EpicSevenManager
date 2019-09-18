<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipmentController extends Controller 
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
   * Display a listing of the resource.
   *
   * @return Response
   */
    public function index()
    {
        return view('equipment');
    }

    /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
    public function create()
    {
        $user = auth()->user();
        return view('equipment/create', ['user' => $user]);
    }

    /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
    public function store(Request $request)
    {
        $data = request();
        return redirect()->route('equipment.index');
    }
}

?>