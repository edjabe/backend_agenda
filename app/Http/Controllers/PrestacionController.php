<?php

namespace App\Http\Controllers;

use App\Models\Prestacion;
use Illuminate\Http\Request;

class PrestacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $prestaciones = Prestacion::where(function ($query) use ($request) {
            if (isset($request->sede_id)) {
                $query->where('sede_id',$request->sede_id);
            }
        })->get(['id', 'nombre', 'sede_id']);

        return response()->json(['prestaciones' => $prestaciones], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestacion  $prestacion
     * @return \Illuminate\Http\Response
     */
    public function show(Prestacion $prestacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestacion  $prestacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestacion $prestacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestacion  $prestacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestacion $prestacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestacion  $prestacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestacion $prestacion)
    {
        //
    }
}
