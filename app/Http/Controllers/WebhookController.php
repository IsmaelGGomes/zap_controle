<?php

namespace App\Http\Controllers;

use App\Models\Webhook;
use App\Http\Controllers\Controller;
use App\Models\Atendente;
use Illuminate\Http\Request;

class WebhookController extends Controller
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
        
        Webhook::create($data);
        
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Webhook $webhook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Webhook $webhook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Webhook $webhook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Webhook::find($id);
        $data->delete();

        return Redirect('/dashboard');
    }
}
