<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12 w-full overflow-x-auto px-2 bg-[#1d232a]">
        <section class="flex mx-auto pb-12 px-4 sm:px-6 lg:px-8 ">
            <form action="{{ config('app.url') }}/dashboard" method="get" class="bg-gray-200 rounded-xl py-4  justify-center items-center flex flex-col gap-8 px-4 h-auto mr-10 ml-18">
                <div class="w-40 h-full p-4 border border-2 border-gray-400 justify-center flex flex-col rounded-xl items-center">
                    <div class="mb-4 text-gray-700 font-semibold">
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
                <div class="w-40 h-full p-4 border border-2 border-gray-400 justify-center flex flex-col rounded-xl items-center">
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
                <div class="w-40 h-full p-4 border border-2 border-gray-400 justify-center flex flex-col rounded-xl items-center">
                    <div class="mb-4 text-gray-700 font-semibold">
                        Filial
                    </div>
                    <div class="w-[120px]">
                        <select class="select w-full max-w-xs focus:outline-none text-md">
                            <option disabled selected>Selecione</option>
                            <option class="text-md">Home</option>
                        </select>
                    </div>
                </div>
                <div class="w-44 h-full p-2 border border-2 border-gray-400 justify-center flex flex-col rounded-xl items-center">
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
    <div class="">
        <div class="bg-gray-100 text-gray-900 rounded-xl ml-8">
            <table class="max-w-[90em] table-auto w-full">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Adicionar/Remover</th>
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
                    @foreach ($item as $items)
                    <input hidden name="id_form" id="id_form" value="{{ $items->id }}" type="text">
                    <tr class="border-b border-gray-200 hover:bg-gray-300">
                        <td class="py-3 px-6 text-center whitespace-nowrap">
                            <div class="flex items-center justify-center">
                                <span class="font-medium">{{ $items->id }}</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center justify-center">
                                <span>{{ $items->add_remove }}</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <span class="flex items-center justify-center">
                                {{ $items->transportadora }}
                            </span>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <span class=" py-1 px-3 rounded-full text-md">{{ $items->filial }}</span>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <span class=" py-1 px-3 rounded-full text-md">{{ $items->email }}</span>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <span class=" py-1 px-3  rounded-full text-md whitespace-nowrap">{{ $items->nome }}</span>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <span class=" py-1 px-3 rounded-full text-md">{{ $items->numero }}</span>
                        </td>
                        <td class="py-3 px-6 text-center">
                            @if ($items->status == 'Concluído')
                            <span class=" py-1 px-3 rounded-full text-md bg-green-200 rounded-xl text-black py-1">{{ $items->status }}</span>
                            @elseif($items->status == 'Pendente')
                            <span class=" py-1 px-3 rounded-full text-md bg-yellow-200 rounded-xl text-black py-1">{{ $items->status }}</span>
                            @elseif ($items->status == 'Andamento')
                            <span class=" py-1 px-3 rounded-full text-md bg-blue-200 rounded-xl text-black py-1">{{ $items->status }}</span>
                            @elseif($items->status == 'Descartado')
                            <span class=" py-1 px-3 rounded-full text-md bg-red-200 rounded-xl text-black py-1">{{ $items->status }}</span>
                            @endif


                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex item-center justify-center">
                                {{-- <?php
                                        echo '<button class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110" 
                                                                                                                                                                                                                                                                                                                        type="button" id="myBtnUpdate" onclick="viewModal()">
                                                                                                                                                                                                                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                                                                                                                                                                                                                                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                                                                                                                                                                                                                                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                                                                                                                                                                                                                                                                                    stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                                                                                                                                                                                                                                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                                                                                                                                                                                                                                                                                    stroke-width="2"
                                                                                                                                                                                                                                                                                                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                                                                                                                                                                                                                                                                            </svg>
                                                                                                                                                                                                                                                                                                                        </button>';
                                        ?> --}}
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
                    @endforeach
                </tbody>
            </table>
            {{-- Modal update --}}
            <div id="myModalUpdate" class="fixed hidden inset-0 bg-opacity-50 h-screen w-full overflow-y-auto">
                <!-- Modal content updatebook -->
                <div class="modal-contentUpdate absolute bg-white md:left-[50%] left-1/2 md:top-[48%] 
                                    top-1/2 md:translate-y-[-50%] md:translate-x-[-50%] w-auto h-auto translate-y-[-40%] translate-x-[-41%]">
                    <div class="w-full flex justify-end p-4">
                        <svg onclick="inUpdate()" class="cursor-pointer w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </div>
                    <div class="modal-headerUpdate bg-white w-full text-black">

                        <div class="px-4  w-full rounded-xl">
                            <form action="#" method="" enctype="multipart/form-data">
                                <div class="relative z-0 w-full mb-4 mt-10 group ">
                                    <input id="add_remove" value="" type="text" name="add_remove" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                                            border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                                    <label for="" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Adicionar/Remover</label>
                                </div>

                                <div class="relative z-0 w-full mb-4 group">
                                    <input id="nome" type="text" name="nome" id="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                                            border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                                    <label for="" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nome</label>
                                </div>

                                <div class="flex flex-row gap-10">
                                    <div class="relative z-0 w-full mb-4 group">
                                        <input id="filial" type="text" name="filial" id="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                                            border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                                        <label for="" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Filial</label>
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input id="email" type="text" name="email" id="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                                            border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                                        <label for="" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                                    </div>

                                </div>
                                <div class="flex flex-row gap-10">
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input id="transportadora" type="text" name="transportadora" id="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                                            border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                                        <label for="" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Transportadora</label>
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input id="numero" type="" name="numero" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                                            border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                                        <label for="" class="clean peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Número</label>
                                        <span id="validade_edition" class="hidden font-semibold text-red-600 text-[14px]">Insira apenas
                                            números !</span>
                                    </div>
                                </div>
                                <div class="flex justify-items-center items-center justify-center md:gap-10 w-full border border-2 rounded-xl px-2 py-4">
                                    <div class="relative w-full">
                                        {{-- <span class="text-center text-md md:text-[16px] text-gray-400 ">
                                                    Status
                                                </span> --}}
                                        <div class="flex flex-row items-center justify-center gap-6">
                                            <div>
                                                <label class="cursor-pointer rounded-md px-2 py-2 my-2 bg-yellow-200 hover:bg-yellow-500">
                                                    <input type="radio" name="status" id="status_pendente" value="Pendente" class="" />
                                                    <i class="pl-2">Pendente</i>
                                                </label>
                                            </div>

                                            <div>
                                                <label class="cursor-pointer rounded-md px-2 py-2 my-2 bg-blue-200 hover:bg-blue-500">
                                                    <input type="radio" name="status" id="status_andamento" value="Andamento" class="" />
                                                    <i class="pl-2">Andamento</i>
                                                </label>
                                            </div>

                                            <div>
                                                <label class="cursor-pointer rounded-md px-2 py-2 my-2 bg-green-200 hover:bg-green-500">
                                                    <input type="radio" name="status" id="status_concluido" value="Concluído" class="" />
                                                    <i class="pl-2">Concluído</i>
                                                </label>
                                            </div>

                                            <div>
                                                <label class="cursor-pointer rounded-md px-2 py-2 my-2 bg-red-200 hover:bg-red-500">
                                                    <input type="radio" name="status" id="status_descartado" value="Descartado" class="" />
                                                    <i class="pl-2">Descartado</i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="space-x-4 py-4 text-right">
                                    <button onclick="inUpdate()" type="button" class="inline-block text-white focus:outline-none font-medium rounded-lg text-sm w-auto sm:w-1/5 px-3 py-2.5 text-center bg-gray-600 hover:bg-gray-700 focus:ring-white-800">Fechar</button>
                                    <button onclick="sendUpdate()" type="button" class="inline-block text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-auto sm:w-1/5 px-3 py-2.5 text-center  hover:bg-blue-700 focus:ring-blue-800">
                                        Editar
                                    </button>
                                </div>
                                <input class="hidden" type="text" value="" id="edit_id" name="id">
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

    /* MODAL DROPDOWN CSS */
    /*the container must be positioned relative:*/
    .custom-select {
        position: relative;
        font-family: Arial;
    }

    .custom-select select {
        display: none;
        /*hide original SELECT element:*/
    }

    .select-selected {
        background-color: #111827;
        border-radius: 8px;
    }

    .custom_filial {
        position: relative;
        font-family: Arial;
    }

    .custom-select select {
        display: none;
        /*hide original SELECT element:*/
    }

    .select-selected {
        background-color: #111827;
        border-radius: 8px;
    }

    /*style the arrow inside the select element:*/
    .select-selected:after {
        position: absolute;
        content: "";
        top: 14px;
        right: 10px;
        width: 0;
        height: 0;
        border: 6px solid transparent;
        border-color: #fff transparent transparent transparent;
    }

    /*point the arrow upwards when the select box is open (active):*/
    .select-selected.select-arrow-active:after {
        border-color: transparent transparent #fff transparent;
        top: 7px;
    }

    /*style the items (options), including the selected item:*/
    .select-items div,
    .select-selected {
        color: #ffffff;
        padding: 8px 16px;
        border: 1px solid transparent;
        border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
        cursor: pointer;
        user-select: none;
    }

    /*style items (options):*/
    .select-items {
        position: absolute;
        background-color: #111827;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 99;
    }

    /*hide the items when the select box is closed:*/
    .select-hide {
        display: none;
    }

    .select-items div:hover,
    .same-as-selected {
        background-color: rgba(0, 0, 0, 0.1);
    }
</style>
<script>
    // function edit_item() {
    //     console.log('ok');
    //     swal({
    //         title: 'Input email address',
    //         input: 'text',
    //         inputLabel: 'Your email address',
    //         inputPlaceholder: 'Enter your email address'
    //         // inputValidator: (value) => {
    //         //     if (!value) {
    //         //         return 'You need to write something!'
    //         //     }
    //         // }
    //     })
    // }

    //modal update

    var modalUpdate = document.getElementById("myModalUpdate");
    var btnUpdate = document.getElementById("myBtnUpdate");

    window.onclick = function(event) {
        if (event.target == modalUpdate) {
            modalUpdate.style.display = "none";
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
            document.querySelector("#add_remove").value = contato.add_remove;
            document.querySelector("#nome").value = contato.nome;
            document.querySelector("#filial").value = contato.filial;
            document.querySelector("#email").value = contato.email;
            document.querySelector("#transportadora").value = contato.transportadora;
            document.querySelector("#numero").value = contato.numero;
            document.querySelector("#id_form").value = contato.id;

            //status
            const status_concluido = document.querySelector("#status_concluido");
            const status_andamento = document.querySelector("#status_andamento");
            const status_pendente = document.querySelector("#status_pendente");
            const status_descartado = document.querySelector("#status_descartado");

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
        const filial = document.querySelector("#filial");
        const email = document.querySelector("#email");
        const transportadora = document.querySelector("#transportadora");
        const numero = document.querySelector("#numero");
        const id = document.querySelector("#id_form");
        var status_resul = '';

        const status_concluido = document.querySelector("#status_concluido");
        const status_andamento = document.querySelector("#status_andamento");
        const status_pendente = document.querySelector("#status_pendente");
        const status_descartado = document.querySelector("#status_descartado");

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
            add_remove: add_remove.value,
            nome: nome.value,
            filial: filial.value,
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

    //FILTER DROPDOWN


    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }

    function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);


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