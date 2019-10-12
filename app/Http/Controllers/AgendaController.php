<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $disponibilidad = Agenda::where(function ($query) use ($request) {
            if (isset($request->prestacion_id)) {
                $query->where('prestacion_id',$request->prestacion_id);
            }
        })->get();

        $arreglo = [];
        $i= 0;
        foreach ($disponibilidad as $key => $value) {
            $arreglo[$i][$value->prestacion->sede->id][$value->prestacion->id][$value->dia]['hora_inicial'] = $value->hora_inicial;
            $arreglo[$i][$value->prestacion->sede->id][$value->prestacion->id][$value->dia]['hora_final'] = $value->hora_final;
            $arreglo[$i][$value->prestacion->sede->id][$value->prestacion->id][$value->dia]['intervalos'] = json_decode($value->intervalos);
            $i++;
        }

        return response()->json(['disponibilidad' => $arreglo], 200);
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
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit(Agenda $agenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agenda $agenda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agenda $agenda)
    {
        //
    }
}
