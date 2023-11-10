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
        $data_request = $request->query();

        $query = Contato::query();
        $item = Contato::all();
        $filters = $request->except('_token');

        if ($request->has('status')) {
            $query->where('status', $request->status);
            
        } elseif ($request->has('filial')) {
            $query->where('filial', $request->filial);
            
        } elseif ($request->has('add_remove')) {
            $query->where('add_remove', $request->add_remove);
            
        } elseif ($request->has('transportadora')) {
            $query->where('transportadora', $request->transportadora);
        }
        $item = $query->get();

        return view('dashboard', compact('item'));
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
