<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12 w-full px-2 flex flex-row h-auto bg-[#1d232a]">
        <div class="flex flex-col">
            <div class="flex flex-col w-40 ml-14 mb-4 space-y-2">
                <div onclick="viewAddAtendente()"
                    class="inline-flex items-center justify-center w-full px-2 py-1 mb-2 text-md text-white bg-green-500 rounded-md hover:bg-green-400 sm:w-auto sm:mb-0 cursor-pointer transition duration-300 ease-in-out transform hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    Atendentes
                </div>
                <div onclick="viewAddWebhook()" 
                    class="inline-flex items-center justify-center w-full px-2 py-1 mb-2 text-md text-white bg-violet-800 rounded-md hover:bg-violet-900 sm:w-auto sm:mb-0 cursor-pointer transition duration-300 ease-in-out transform hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" />
                    </svg>
                    Webhooks
                </div>
            </div>
            <form action="{{ config('app.url') }}/dashboard" method="get"
                class="bg-gray-200 rounded-xl py-2 justify-center items-center flex flex-col gap-8 px-4 h-auto w-[200px] mr-10 ml-8">
                <div
                    class="w-40 h-[18%] p-4 border border-2 border-gray-400 justify-center flex flex-col rounded-xl items-center">
                    <div class="mb-4 text-gray-700 font-semibold whitespace-nowrap">
                        Adicionar/Remover
                    </div>
                    <div class="w-[120px]">
                        <select name="add_remove" class="select w-full max-w-xs focus:outline-none text-md">
                            <option disabled selected>Selecione</option>
                            <option class="text-md" value="Adicionar">Adicionar</option>
                            <option class="text-md" value="Remover">Remover</option>
                        </select>
                    </div>
                </div>
                <div
                    class="w-40 h-[18%] p-4 border border-2 border-gray-400 justify-center flex flex-col rounded-xl items-center">
                    <div class="mb-4 text-gray-700 font-semibold">
                        Transportadora
                    </div>
                    <div class="w-[120px]">
                        <select class="w-full select" name="transportadora" id="">
                            <option value="Selecione" selected disabled>Selecione</option>
                            <option value="Transval">Transval</option>
                            <option value="Mafro">Mafro</option>
                            <option value="Rodolider">Rodolider</option>
                            <option value="Rezende">Rezende</option>
                            <option value="Rodomacro">Rodomacro</option>
                            <option value="JCL">JCL</option>
                            <option value="RDM">RDM</option>
                            <option value="Jorginho">Jorginho</option>
                        </select>
                    </div>
                </div>
                <div
                    class="w-40 h-[18%] p-4 border border-2 border-gray-400 justify-center flex flex-col rounded-xl items-center">
                    <div class="mb-4 text-gray-700 font-semibold">
                        Filial
                    </div>
                    <div class="w-[120px]">
                        <select name="filial" id="filial"
                            class="select_filial w-full max-w-xs focus:outline-none text-md">
                            <option disabled selected value="">Selecione</option>
                            @forelse ($data_filial as $data_filials)
                                <option value="{{ $data_filials }}">{{ $data_filials }}</option>
                            @empty
                                <option disabled value="">Sem Filiais</option>
                            @endforelse
                        </select>
                    </div>
                </div>

                <div
                    class="w-40 h-[18%] p-2 border border-2 border-gray-400 justify-center flex flex-col rounded-xl items-center">
                    <div class="mb-4 text-gray-700 font-semibold">
                        Status
                    </div>
                    <div class="w-[120px]">
                        {{-- <form action="{{ config('app.url') }}/dashboard" method="get">
                        <details class="dropdown">
                            <summary class="m-1 btn">Selecione</summary>
                            <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52 gap-2">
                                <li onclick="modify_params()">
                                    <input id="search_concluido" type="none" class="bg-green-200 hover:bg-green-500 text-black hover:text-black" name="status" value="Concluído">
                                </li>
                                <li onclick="modify_params()">
                                    <input id="search_pendente" type="none" class="bg-yellow-200 hover:bg-yellow-500 text-black hover:text-black" name="status" value="Pendente">
                                </li>
                                <li onclick="modify_params()">
                                    <input id="search_descartado" type="none" class="bg-red-200 hover:bg-red-500 text-black hover:text-black" name="status" value="Descartado">
                                </li>
                                <li onclick="modify_params()">
                                    <input id="search_andamento" type="none" class="bg-blue-200 hover:bg-blue-500 text-black hover:text-black" name="status" value="Andamento">
                                </li>
                            </ul>
                        </details>
                        </form> --}}
                        <select name="status" class="select w-full max-w-xs focus:outline-none text-md">
                            <option disabled selected>Selecione</option>
                            <option class="text-md" value="Andamento">Andamento</option>
                            <option class="text-md" value="Concluído">Concluído</option>
                            <option class="text-md" value="Descartado">Descartado</option>
                            <option class="text-md" value="Pendente">Pendente</option>
                        </select>
                    </div>
                </div>
                <div class="w-full">
                    <div class="items-center flex justify-center flex-col">
                        <hr class="w-full border-1 border-gray-700 mb-2" />
                        <button class="btn" type="submit">Enviar</button>
                    </div>
                </div>

            </form>
        </div>
        {{-- Modal adicionar atendentes --}}
        <div id="add_atendente" class="fixed hidden inset-0 z-10 bg-gray-500 bg-opacity-50 h-screen w-full overflow-y-auto ">
            <div
                class="absolute rounded-md bg-white md:left-[50%] left-1/2 md:top-[48%] top-1/2 md:translate-y-[-50%] md:translate-x-[-50%] w-auto h-auto translate-y-[-40%] translate-x-[-41%]">
                <div class="px-10 py-4 rounded-xl">
                    <div class="flex flex-row justify-end">
                        <svg onclick="viewAddAtendente()" class="cursor-pointer w-6 h-6" aria-hidden="true"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </div>
                    <div class="flex flex-row gap-8">
                        <div class="flex flex-col border border-1 px-10 py-2 rounded-md">
                            <div class="text-center">
                                <h3 class="text-black mb-4 font-semibold">Formulário</h3>
                            </div>
                            <form method="POST" action="{{ config('app.url') }}/atendente">
                                @csrf
                                <div class="relative z-0 w-full mb-6 group">
                                    <input id="atendente" type="text" name="atendente"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                            border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" ">
                                    <label for=""
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nome
                                        do Atendente</label>
                                </div>

                                <div class="relative z-0 w-full mb-6 group">
                                    <input id="numero_atendente" type="number" name="numero_atendente"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                            border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" ">
                                    <label for=""
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        Número</label>
                                </div>
                                <button class="rounded-xl py-2 px-4 bg-slate-600 text-white border-none">
                                    Salvar
                                </button>
                            </form>
                        </div>

                        <div class="overflow-y-auto h-[14rem]">

                            <table class="min-w-full divide-y divide-gray-200 ">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nome</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Número</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Ação</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($data_atendente as $items)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $items->atendente }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $items->numero_atendente }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                            <form action="{{ config('app.url') }}/atendente/{{$items->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="ml-2 px-2 py-[2px] font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out">Excluir
                                                </button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal adicionar webhooks --}}
        <div id="add_webhook" class="fixed hidden inset-0 z-10 bg-gray-500 bg-opacity-50 h-screen w-full overflow-y-auto ">
            <div
                class="absolute rounded-md bg-white md:left-[50%] left-1/2 md:top-[48%] top-1/2 md:translate-y-[-50%] md:translate-x-[-50%] w-auto h-auto translate-y-[-40%] translate-x-[-41%]">
                <div class="px-10 py-4 rounded-xl">
                    <div class="flex flex-row justify-end">
                        <svg onclick="viewAddWebhook()" class="cursor-pointer w-6 h-6" aria-hidden="true"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </div>
                    <div class="flex flex-row gap-8">
                        <div class="flex flex-col border border-1 px-10 py-2 rounded-md">
                            <div class="text-center">
                                <h3 class="text-black mb-4 font-semibold">Formulário</h3>
                            </div>
                            <form method="POST" action="{{ config('app.url') }}/webhook/">
                                @csrf
                                <div class="relative z-0 w-full mb-6 group">
                                        <select class="w-full border border-1 rounded-xl mb-2 text-sm font-medium text-gray-900 " name="nome_transportadora" id="">
                                            <option value="Selecione" selected disabled>Selecione</option>
                                            <option value="Transval">Transval</option>
                                            <option value="Mafro">Mafro</option>
                                            <option value="Rodolider">Rodolider</option>
                                            <option value="Rezende">Rezende</option>
                                            <option value="Rodomacro">Rodomacro</option>
                                            <option value="JCL">JCL</option>
                                            <option value="RDM">RDM</option>
                                            <option value="Jorginho">Jorginho</option>
                                        </select>
                                </div>

                                <div class="relative z-0 w-full mb-6 group">
                                    <input id="webhook" type="text" name="webhook"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                            border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" ">
                                    <label for=""
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        Webhook</label>
                                </div>
                                <button class="rounded-xl py-2 px-4 bg-slate-600 text-white border-none">
                                    Salvar
                                </button>
                            </form>
                        </div>

                        <div class="overflow-y-auto h-[14rem]">

                            <table class="min-w-full divide-y divide-gray-200 ">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nome</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Número</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Ação</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($data_webhook as $items)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $items->nome_transportadora }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $items->webhook }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                            <form action="{{ config('app.url') }}/webhook/{{ $items->id }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="ml-2 px-2 py-[2px] font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out">Excluir
                                                </button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="flex pb-2 mt-4">
            <div class="">
                <div class="bg-gray-100 text-gray-900 rounded-xl ">
                    <table class="max-w-[90em] table-auto w-full">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm">
                                <th class="py-3 px-6 text-left">ID</th>
                                <th class="py-3 px-6 text-left whitespace-nowrap">Adicionar/Remover</th>
                                <th class="py-3 px-6 text-center whitespace-nowrap">Transportadora</th>
                                <th class="py-3 px-6 text-center">Filial</th>
                                <th class="py-3 px-6 text-center">Email</th>
                                <th class="py-3 px-6 text-center">Nome</th>
                                <th class="py-3 px-6 text-center">Número</th>
                                <th class="py-3 px-6 text-center">Status</th>
                                <th class="py-3 px-6 text-center">Edição</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-md font-light">
                            @forelse ($item as $items)
                                <input hidden name="id_form" id="id_form" value="{{ $items->id }}"
                                    type="text">
                                <tr class="border-b border-gray-200 hover:bg-gray-300">
                                    <td class="py-3 px-6 text-center ">
                                        <div class="flex items-center justify-center">
                                            <span class="font-medium">{{ $items->id }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            @if ($items->add_remove == 'Remover')
                                                <span
                                                    class="font-semibold text-red-600">{{ $items->add_remove }}</span>
                                            @else
                                                <span
                                                    class="font-semibold text-green-600">{{ $items->add_remove }}</span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span class="flex items-center justify-center">
                                            {{ $items->transportadora }}
                                        </span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span class=" py-1 px-3 rounded-full text-md">{{ $items->cidade }}</span>
                                    </td>
                                    <td style="overflow-x: auto;" class="max-w-[12rem] text-center">
                                        <span style="white-space: nowrap;"
                                            class="text-center text-md">{{ $items->email }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span
                                            class=" py-1 px-3  rounded-full text-md whitespace-nowrap">{{ $items->nome }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span class=" py-1 px-3 rounded-full text-md whitespace-nowrap">
                                            {{ $items->numero }}
                                        </span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        @if ($items->status == 'Concluído')
                                            <span
                                                class=" py-1 px-3 rounded-full text-md bg-green-200 rounded-xl text-black py-1">{{ $items->status }}</span>
                                        @elseif($items->status == 'Pendente')
                                            {{-- <a target="blank" href="https://wa.me/5566999949595/?text=fala ai meu amigo">{{$items->status}}</a> --}}
                                            <span
                                                class=" py-1 px-3 rounded-full text-md bg-yellow-200 rounded-xl text-black py-1">{{ $items->status }}</span>
                                        @elseif ($items->status == 'Andamento')
                                            <span
                                                class=" py-1 px-3 rounded-full text-md bg-blue-200 rounded-xl text-black py-1">{{ $items->status }}</span>
                                        @elseif($items->status == 'Descartado')
                                            <span
                                                class=" py-1 px-3 rounded-full text-md bg-red-200 rounded-xl text-black py-1">{{ $items->status }}</span>
                                        @endif


                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            <?php
                                            echo '
                                                    <button class="w-4 mr-2 cursor-pointer transform hover:text-purple-500 hover:scale-110" 
                                                type="button" onclick="inUpdate(), editContato(' .
                                                $items->id .
                                                ')">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </button>';
                                            ?>
                                            <?php
                                            echo '
                                                <button class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110" 
                                                    type="button" onclick="messageDelete(' .
                                                $items->id .
                                                ')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>';
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                @empty
                                    <td class="text-center py-4 text-xl" colspan="9">Nenhum registro encotrado.
                                    </td>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="w-full flex p-4 flex-row justify-center">
                        <div class="flex">
                            {{ $item->withQueryString()->links() }}
                        </div>
                    </div>
                    {{-- Modal update --}}
                    <div id="myModalUpdate"
                        class="fixed hidden inset-0 bg-opacity-50 h-screen w-full overflow-y-auto">
                        <!-- Modal content updatebook -->
                        <div
                            class="modal-contentUpdate absolute bg-white md:left-[50%] left-1/2 md:top-[48%] 
                                top-1/2 md:translate-y-[-50%] md:translate-x-[-50%] w-auto h-auto translate-y-[-40%] translate-x-[-41%]">
                            <div class="w-full flex justify-end p-4">
                                <svg onclick="inUpdate()" class="cursor-pointer w-6 h-6" aria-hidden="true"
                                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                </svg>
                            </div>
                            <div class="modal-headerUpdate bg-white w-full text-black">

                                <div class="px-4  w-full rounded-xl">
                                    <form action="#" method="" enctype="multipart/form-data">
                                        <div class="relative z-0 w-full mb-4 mt-10 group ">
                                            <label for="" class="text-gray-500">Adicionar/Remover</label>
                                            <div class="flex flex-row">
                                                <div class="">
                                                    <input name="add_remove" id="add_remove_remove" type="radio"
                                                        value="Remover">
                                                    <label for="">Remover</label>
                                                </div>
                                                <div class="ml-4">
                                                    <input name="add_remove" id="add_remove_add" type="radio"
                                                        value="Adicionar">
                                                    <label for="">Adicionar</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="relative z-0 w-full mb-4 group">
                                            <input id="nome" type="text" name="nome" id=""
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                                        border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                placeholder=" ">
                                            <label for=""
                                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nome</label>
                                        </div>

                                        <div class="flex flex-row gap-10">
                                            <div class="relative z-0 w-full mb-4 group">
                                                <input id="cidade" type="text" name="cidade"
                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                                        border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                    placeholder=" ">
                                                <label for=""
                                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Filial</label>
                                            </div>
                                            <div class="relative z-0 w-full mb-6 group">
                                                <input id="email" type="text" name="email" id=""
                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                                        border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                    placeholder=" ">
                                                <label for=""
                                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                                            </div>

                                        </div>
                                        <div class="flex flex-row gap-10">
                                            <div class="relative z-0 w-full mb-6 group">
                                                <input id="transportadora" type="text" name="transportadora"
                                                    id=""
                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                                        border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                    placeholder=" ">
                                                <label for=""
                                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Transportadora</label>
                                            </div>
                                            <div class="relative z-0 w-full mb-6 group">
                                                <input id="numero" type="" name="numero"
                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                                        border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                    placeholder=" ">
                                                <label for=""
                                                    class="clean peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Número</label>
                                                <span id="validade_edition"
                                                    class="hidden font-semibold text-red-600 text-[14px]">Insira apenas
                                                    números !</span>
                                            </div>
                                        </div>
                                        <div
                                            class="flex justify-items-center items-center justify-center md:gap-10 w-full border border-2 rounded-xl px-2 py-4">
                                            <div class="relative w-full">
                                                {{-- <span class="text-center text-md md:text-[16px] text-gray-400 ">
                                                Status
                                            </span> --}}
                                                <div class="flex flex-row items-center justify-center gap-6">
                                                    <div>
                                                        <label
                                                            class="cursor-pointer rounded-md px-2 py-2 my-2 bg-yellow-200 hover:bg-yellow-500">
                                                            <input type="radio" name="status" id="status_pendente"
                                                                value="Pendente" class="" />
                                                            <i class="pl-2">Pendente</i>
                                                        </label>
                                                    </div>

                                                    <div>
                                                        <label
                                                            class="cursor-pointer rounded-md px-2 py-2 my-2 bg-blue-200 hover:bg-blue-500">
                                                            <input type="radio" name="status"
                                                                id="status_andamento" value="Andamento"
                                                                class="" />
                                                            <i class="pl-2">Andamento</i>
                                                        </label>
                                                    </div>

                                                    <div>
                                                        <label
                                                            class="cursor-pointer rounded-md px-2 py-2 my-2 bg-green-200 hover:bg-green-500">
                                                            <input type="radio" name="status"
                                                                id="status_concluido" value="Concluído"
                                                                class="" />
                                                            <i class="pl-2">Concluído</i>
                                                        </label>
                                                    </div>

                                                    <div>
                                                        <label
                                                            class="cursor-pointer rounded-md px-2 py-2 my-2 bg-red-200 hover:bg-red-500">
                                                            <input type="radio" name="status"
                                                                id="status_descartado" value="Descartado"
                                                                class="" />
                                                            <i class="pl-2">Descartado</i>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="space-x-4 py-4 text-right">
                                            <button onclick="inUpdate()" type="button"
                                                class="inline-block text-white focus:outline-none font-medium rounded-lg text-sm w-auto sm:w-1/5 px-3 py-2.5 text-center bg-gray-600 hover:bg-gray-700 focus:ring-white-800">Fechar</button>
                                            <button onclick="sendUpdate()" type="button"
                                                class="inline-block text-white bg-[#202356] hover:bg-blue-800 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-auto sm:w-1/5 px-3 py-2.5 text-center  hover:bg-blue-700 focus:ring-blue-800">
                                                Salvar
                                            </button>
                                        </div>
                                        <input class="hidden" type="text" value="" id="edit_id"
                                            name="id">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
<style>
    .modal-contentUpdate {
        background-color: #fefefe;
        border: 1px solid #888;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s;
    }

    .select-option::after {
        content: "";
        border-top: 12px solid #000;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        position: absolute;
        right: 15px;
        top: 50%;
        margin-top: -8px;
    }

    .select-box.active .select-option::after {
        transform: rotate(-180deg);
    }

    .select2-results {
        color: black;
    }
</style>
<script>
    //modal update

    var modalUpdate = document.getElementById("myModalUpdate");
    var btnUpdate = document.getElementById("myBtnUpdate");
    var atendente_modal = document.getElementById("add_atendente");
    var webhook_modal = document.getElementById("add_webhook");

    window.onclick = function(event) {
        if (event.target == modalUpdate) {
            modalUpdate.style.display = "none";
        }
        if (event.target == atendente_modal) {
            atendente_modal.style.display = "none";
        }
        if (event.target == webhook_modal) {
            webhook_modal.style.display = "none";
        }
    }

    btnUpdate.onclick = function() {
        modalUpdate.style.display = "block";
    }

    function inUpdate() {
        if (modalUpdate.style.display == "block") {
            modalUpdate.style.display = "none";
        } else {
            modalUpdate.style.display = "block";
        }
    }

    function viewModal() {
        if (modalUpdate.style.display == "block") {
            modalUpdate.style.display = "none";
        } else {
            modalUpdate.style.display = "block";
        }
    }

    function viewAddAtendente() {
        if (atendente_modal.style.display == "block") {
            atendente_modal.style.display = "none";
        } else {
            atendente_modal.style.display = "block";
        }
    }

    function viewAddWebhook() {
        if (webhook_modal.style.display == "block") {
            webhook_modal.style.display = "none";
        } else {
            webhook_modal.style.display = "block";
        }
    }

    function getContato($id) {

        const options = {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            },
        };
        return fetch(`{{ config('app.url') }}/dashboard/edit/${$id}`, options)
            .then((data) => data.json())
            .catch((error) => console.log(error));
    }

    async function editContato($id) {
        const contato = await getContato($id);

        for (var i in contato) {
            /* document.querySelector("#add_remove").value = contato.add_remove; */
            document.querySelector("#nome").value = contato.nome;
            document.querySelector("#cidade").value = contato.cidade;
            document.querySelector("#email").value = contato.email;
            document.querySelector("#transportadora").value = contato.transportadora;
            document.querySelector("#numero").value = contato.numero;
            document.querySelector("#id_form").value = contato.id;

            //status
            const status_concluido = document.querySelector("#status_concluido");
            const status_andamento = document.querySelector("#status_andamento");
            const status_pendente = document.querySelector("#status_pendente");
            const status_descartado = document.querySelector("#status_descartado");

            if (contato.add_remove == 'Remover') {
                document.querySelector("#add_remove_remove").checked = true;
            } else if (contato.add_remove == 'Adicionar') {
                document.querySelector("#add_remove_add").checked = true;
            }

            switch (contato.status) {
                case "Pendente":
                    console.log("Pendente");
                    status_pendente.checked = true;
                    break;
                case "Concluído":
                    status_concluido.checked = true;
                    break;
                case "Andamento":
                    status_andamento.checked = true;
                    break;
                case "Descartado":
                    status_descartado.checked = true;
                    break;
            }
        }
    }

    function sendUpdate() {
        const add_remove = document.querySelector("#add_remove");
        const nome = document.querySelector("#nome");
        const cidade = document.querySelector("#cidade");
        const email = document.querySelector("#email");
        const transportadora = document.querySelector("#transportadora");
        const numero = document.querySelector("#numero");
        const id = document.querySelector("#id_form");
        var status_resul = '';
        var radio_resul = '';

        const status_concluido = document.querySelector("#status_concluido");
        const status_andamento = document.querySelector("#status_andamento");
        const status_pendente = document.querySelector("#status_pendente");
        const status_descartado = document.querySelector("#status_descartado");

        const radio_remover = document.querySelector("#add_remove_remove");
        const radio_adicionar = document.querySelector("#add_remove_add");

        if (radio_remover.checked == true) {
            radio_resul = 'Remover';
        } else if (radio_adicionar.checked == true) {
            radio_resul = 'Adicionar';
        }

        if (status_pendente.checked == true) {
            status_resul = 'Pendente';
        } else if (status_andamento.checked == true) {
            status_resul = 'Andamento';
        } else if (status_concluido.checked == true) {
            status_resul = 'Concluído';
        } else if (status_descartado.checked == true) {
            status_resul = 'Descartado';
        }

        const data = {
            add_remove: radio_resul,
            nome: nome.value,
            cidade: cidade.value,
            email: email.value,
            transportadora: transportadora.value,
            numero: numero.value,
            status: status_resul
        }

        const token = document.querySelector('meta[name="csrf-token"]').content;

        const options = {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token,
            },
            body: JSON.stringify(data)
        };

        const res = fetch(`{{ config('app.url') }}/dashboard/${id.value}`, options).then((response) => {
            console.log(response.status);

            const statuss = response.status == '405' ? true : false;

            if (!statuss) {
                sessionStorage.setItem("recarregou", "true");
                window.location.reload();
            }
        }).catch((error) => {
            console.log(error);
        })
    }

    function messageDelete($id) {
        swal({
            title: `Deseja realmente excluir ?`,
            text: "Essa ação não poderá ser revertida",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((result) => {
            if (result) {
                deleteContato($id)
            }
        })
    }

    function deleteContato($id) {
        const id = $id;
        const token = document.querySelector('meta[name="csrf-token"]').content;
        const options = {
            method: 'delete',
            headers: {
                'Content-Type': 'application/json; charset=UTF-8',
                'X-CSRF-TOKEN': token,
            },
        };
        const res = fetch(`{{ config('app.url') }}/dashboard/${id}`, options).then((response) => {
            console.log(response.status);
            window.location.reload()
            console.log('sucess');
        }).catch((error) => {
            console.log(error);
        })
    }
    //REGRAS DOS FILTROS

    function modify_params() {
        const params = new URLSearchParams(window.location.search);

        const search_concluido = document.querySelector('#search_concluido');
        const search_pendente = document.querySelector('#search_pendente');
        const search_andamento = document.querySelector('#search_andamento');
        const search_descartado = document.querySelector('#search_descartado');

        if (params.get('status') == 'Concluído') {
            search_concluido.name = "";
        } else if (params.get('status') == 'Pendente') {
            search_pendente.name = "";
        } else if (params.get('status') == 'Andamento') {
            search_andamento.name = "";
        } else if (params.get('status') == 'Descartado') {
            search_descartado.name = "";
        }
    }
</script>
<script>
    $(document).ready(function() {
        //select filiais
        $('.select_filial').select2();
    });
</script>
