<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonajeRequest;
use App\Models\Personaje;
use Illuminate\Http\Request;

class ApiPersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personajes = Personaje::all();
        return response()->json([
            'status' => true,
            'personajes' => $personajes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonajeRequest $request)
    {
        $personaje = Personaje::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Personaje Creado con exito!",
            'personaje' => $personaje
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Personaje $personaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personaje $personaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonajeRequest $request, Personaje $personaje)
    {
        $personaje->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Personaje actualizado con éxito',
            'personaje' => $personaje
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personaje $personaje)
    {
        $personaje->delete();

        return response()->json([
            'status' => true,
            'message' => 'Personaje eliminado con éxito'
        ]);
    }
}
