<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\validadorForm1;
use Carbon\Carbon;


class ContBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conCyber = DB::table('tb_formulario')->get();
        return view('consultar', compact('conCyber'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorForm1 $request)
    {
        DB::table('tb_formulario')->insert([
            'usuario' => $request->input('usuario'),
            'ncomputadora' => $request->input('ncomputadora'),
            'tiempo' => $request->input('tiempo'),
            'fecha' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return redirect('/formulario')->with('confirmacion','Datos guardados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pcid = DB::table('tb_formulario')->where('idFormulario', $id)->first();
        return view('editCyber', compact('pcid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('tb_formulario')->where('idFormulario', $id)->update([
            'usuario' => $request->input('usuario'),
            'ncomputadora' => $request->input('ncomputadora'),
            'tiempo' => $request->input('tiempo'),
            'fecha' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return redirect('/consultara')->with('confircon','Datos actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function confirm($id)
    {
        $pcid = DB::table('tb_formulario')->where('idFormulario', $id)->first();
        return view('confirmElim', compact('pcid'));
    }

    public function destroy($id)
    {
        DB::table('tb_formulario')->where('idFormulario', $id)->delete();
        return redirect('/consultara')->with('confircon','Datos eliminados');
    }
}
