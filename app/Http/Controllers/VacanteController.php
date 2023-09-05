<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vacante;
use Illuminate\Http\Request;

class VacanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $this->authorize('viewAny', Vacante::class);   
        return view('vacantes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $this->authorize('create', Vacante::class);   
        return view('vacantes.create');
    }

   

    /**
     * Display the specified resource.
     */
    public function show(Vacante $vacante)
    {
        return view('vacantes.show', [
            'vacante'=> $vacante
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacante $vacante)
    {
         $this->authorize('update', $vacante);  //aca lo que estamos hacien es decirle que se comunique con el polici VacantePoliciy para que revise si el usuario logueado es igual al que tiene el formulario abierto

        return view('vacantes.edit',[
            'vacante'=> $vacante
        ]);
    }


}
