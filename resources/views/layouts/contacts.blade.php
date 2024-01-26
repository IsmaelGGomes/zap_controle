<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ZapFretes</title>
    <link rel="icon" type="image" href="https://zapfretes.com.br/suporte/images/login/ico.png" alt="Ícone" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://zapfretes.com.br/suporte/build/assets/app-f9083261.css">
    
    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    {{-- select --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body class="bg-white">
    <div class="mx-auto max-w-screen-xl px-4 py-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            <div class="flex flex-col">
                <img class="" src="https://zapfretes.com.br/suporte/images/login/logo_zapfrete.png"
                    alt="">
                {{-- <p class="mx-auto mt-4 max-w-md text-center text-gray-500">
                    Informe sua demanda<br />
                    Nossa equipe de suporte entrará em contato !
                </p> --}}
            </div>

            <form action="https://zapfretes.com.br/suporte/dashboard" method="POST"
                class="mt-6 bg-white space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8 mb-10">
                {{-- <p class="text-center text-lg font-medium">ZapFretes | Suporte</p> --}}
                @csrf
                <div>
                    <div class="border-b-2 py-2 relative flex flex-col justify-center w-full items-center">
                        <span class="ml-2 font-semibold text-xl text-black">Adicionar ou remover ?<strong
                                class="ml-2 text-red-500">*</strong></span>
                        <div class="mt-4 flex flex-row gap-6">
                            <div class="">
                                <input type="radio" name="add_remove" value="Adicionar" class="" />
                                <span class="text-black">Adicionar</span>
                            </div>
                            <div class="">
                                <input type="radio" name="add_remove" value="Remover" class="" />
                                <span class="text-black">Remover</span>
                            </div>
                        </div>
                        @error('add_remove')
                            <label class="text-red-500 font-semibold">Selecione uma opção !</label>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="relative">
                        <span class="ml-2 text-black font-semibold">Nome<strong class="ml-2 text-red-500">*</strong></span>
                        <input name="nome" type="text" value="{{ old('nome') }}"
                            class="{{ $errors->first('nome') ? 'w-full rounded-lg border-2 border-red-500 p-4 text-sm shadow-md text-black' : 'text-black w-full rounded-lg  p-4 pe-12 border-none text-sm shadow-md' }}"
                            placeholder="Digite o nome do colaborador" />
                        @error('nome')
                            <label class="text-red-500 font-semibold">Preencha esse campo !</label>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="relative">
                        <span class="ml-2 text-black font-semibold">Número<strong class="ml-2 text-red-500">*</strong></span>
                        <input id="telefone_format" minlength="2" value="{{ old('numero') }}" maxlength="14"
                            name="numero" type="text"
                            class="{{ $errors->first('numero') ? 'w-full rounded-lg border-2 border-red-500 p-4 text-sm shadow-md text-black' : 'text-black w-full rounded-lg  p-4 pe-12 border-none text-sm shadow-md' }}"
                            placeholder="Exemplo: (66)999999999" />
                        @error('numero')
                            <label class="text-red-500 font-semibold">Preencha esse campo !</label>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="relative">
                        <span class="ml-2 text-black font-semibold">Transportadora<strong class="ml-2 text-red-500">*</strong></span>
                        <select class="w-full border-none shadow-md rounded-md text-black" name="transportadora"
                            id="">
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
                        <!-- <input name="transportadora" type="text" value="{{ old('transportadora') }}"
                            class="{{ $errors->first('transportadora') ? 'w-full rounded-lg bg-white border-2 border-red-500 p-4 text-sm shadow-md' : 'w-full rounded-lg  p-4 pe-12 border-none text-sm shadow-md' }}"
                            placeholder="Digite a transportadora" /> -->
                        @error('transportadora')
                            <label class="text-red-500 font-semibold">Preencha esse campo !</label>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class=" border-none rounded-lg w-auto h-auto px-4 pb-8 pt-2 shadow-md">
                        <span class="ml-2 text-black text-center w-full inline-block font-semibold mb-4">Filial<strong class="ml-2 text-red-500">*</strong></span>
                        <div class="flex flex-row gap-4 w-full h-[40px]">
                            <div class="">
                                <label for="" class="text-black">Estado</label>
                                <select style="width: 200px" name="estado" id="estados" class="select_estados">
                                    <option></option>
                                </select>
                            </div>
                            <div class="">
                                <label for="" class="text-black">Cidade</label>
                                <select style="width: 200px" name="cidade" id="cidades" class="select_cidades">
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom: 70px" class="">
                    <div class="relative">
                        <span class="ml-2 text-black font-semibold">Email<strong class="ml-2 text-red-500">*</strong></span>
                        <input name="email" type="email" value="{{ old('email') }}"
                            class="{{ $errors->first('email') ? 'w-full rounded-lg border-2 border-red-500 p-4 text-sm shadow-md text-black' : 'w-full rounded-lg  border-none p-4 pe-12 text-black text-sm shadow-md' }}"
                            placeholder="Digite o e-mail" />
                        @error('email')
                            <label class="text-red-500 font-semibold">{{ $errors->first('email') }}</label>
                        @enderror
                    </div>
                </div>

                <button onclick="validade_numero()" type="submit"
                    class="block w-full rounded-lg bg-[#202356] px-5 py-3 text-md font-medium text-white">
                    Enviar
                </button>

                @if (Session::has('message'))
                    <script>
                        swal("Enviado com sucesso", 'Nossa equipe entrará em contato', {
                            button: true,
                            icon: 'success',
                            button: "OK",
                        });
                    </script>
                @endif

            </form>
        </div>
    </div>
</body>

</html>
<style>
    .select2-results {
        color: black;
    }
</style>
<script>
    const input = document.getElementById("telefone_format");

    input.addEventListener("keyup", formatarTelefone);

    function formatarTelefone(e) {
        var v = e.target.value.replace(/\D/g, "");

        v = v.replace(/^(\d\d)(\d)/g, "($1)$2");

        v = v.replace(/(\d{5})(\d)/, "$1-$2");

        e.target.value = v;
    }

    $(document).ready(function() {

        //select estados
        $('.select_estados').select2();
        //select cidades
        $('.select_cidades').select2();

        $.getJSON('/suporte/storage/app/public/json/estados_cidades.json', function(data) {

            var items = [];
            var options = '<option value="0" disabled selected>Escolha um estado</option>';
            var estados = $("#estados");
            var cidades = $("#cidades");

            $.each(data, function(key, val) {
                options += '<option  name="estado" value="' + val.nome + '">' + val.nome + '</option>';
            });
            estados.html(options);

            estados.change(function() {

                var options_cidades = '';
                var str = "";

                if (estados.val() != 0) {
                    cidades.prop("disabled", false);
                } else {
                    cidades.prop("disabled", true);
                }


                $("#estados option:selected").each(function() {
                    str += $(this).text();
                });

                $.each(data, function(key, val) {
                    if (val.nome == str) {
                        $.each(val.cidades, function(key_city, val_city) {
                            options_cidades += '<option name="cidade" value="' + val_city +
                                '">' + val_city + '</option>';
                        });
                    }
                });

                cidades.html(options_cidades);

            }).change();

        });

    });
</script>
