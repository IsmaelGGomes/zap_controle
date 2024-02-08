<?php

namespace App\Http\Controllers;

use App\Models\Atendente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AtendenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $data = $request->all();
        
        Atendente::create($data);
        
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Atendente $atendente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Atendente $atendente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Atendente $atendente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Atendente $atendente)
    {
        //
    }
}
