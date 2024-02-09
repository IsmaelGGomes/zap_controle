<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContatoPostRequest;
use App\Http\Requests\ContatoPutRequest;
use App\Models\Atendente;
use App\Models\Contato;
use App\Models\Webhook;
use GrahamCampbell\ResultType\Success;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
        $item = $query->paginate(9);

        // $data_filial = Contato::all();
        $data_filial = Contato::all()->pluck('cidade')->unique();
        /* $f = $data_filial->pluck('filial'); */
        $data_atendente = Atendente::all();

        $data_webhook = Webhook::all();

        return view('dashboard', compact('item', 'data_filial', 'data_atendente','data_webhook'));
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
        $data = $request->all();

        $data['status'] = 'Pendente';
        $data['edit'] = 'ativo';
        $data['filial'] = '';

        // Fazer a request para a URL
        $client = new Client();

        $response = Http::post('https://backend.botconversa.com.br/api/v1/webhooks-automation/catch/17618/twIgzNV2QSjl/', [
            'cidade' => $data['cidade'],
            'add_remove' => $data['add_remove'],
            'transportadora' => $data['transportadora'],
            'numero' => $data['numero'],
            'estado' => $data['estado'],
            'nome' => $data['nome'],
            'email' => $data['email'],
            'atendente' => '+5566999949595'
        ]);
        /* $response = $client->request('GET', 'viacep.com.br/ws/78635000/json/'); */
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

        return $contato->update($validate);
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
