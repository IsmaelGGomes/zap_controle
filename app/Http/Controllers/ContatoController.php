<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContatoPostRequest;
use App\Http\Requests\ContatoPutRequest;
use App\Models\Contato;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filters = $request->except('_token');

        $query = Contato::query();

        if (isset($request->status) && ($request->status != null)){
            $query->where('status',  request()->input('status'));
        };
        if (isset($request->add_remove) && ($request->add_remove != null)){
            $query->where('add_remove',  request()->input('add_remove'));
        };
        if (isset($request->transportadora) && ($request->transportadora != null)){
            $query->where('transportadora',  request()->input('transportadora'));
        };
        if (isset($request->cidade) && ($request->cidade != null)){
            $query->where('cidade',  request()->input('cidade'));
        };
        $item = $query->get();

        // $data_filial = Contato::all();
        // $data_filial = $data_filial->distinct('filial');
        $data_filial = Contato::all()->pluck('cidade')->unique();

        return view('dashboard', compact('item', 'data_filial'));
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
    public function store(ContatoPostRequest $request)
    {
        $data = $request->validated();

        $data['status'] = 'Pendente';
        $data['edit'] = 'ativo';
        $data['filial'] = '';

        Contato::create($data);

        // Alert::success('Eviado com sucesso','Nossa equipe entrará em contato');

        return redirect('/')->with('message', 'sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contato $contato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return Contato::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $contato = Contato::find($id);

        $validate = $request->all();

        session()->flash('Status', 'Status atualizado com sucesso !');

        return $contato->update($validate);;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Contato::find($id);

        session()->flash('Delete', 'Contato removido com sucesso !');
        return $data->delete();

        // return redirect('/dashboard');
    }

    public function show_contato()
    {
        return view('layouts.contacts');
    }
}
