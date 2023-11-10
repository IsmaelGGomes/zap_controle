<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>ZapFretes</title>
    <link rel="icon" type="image" href="{{asset('images/login/ico.png')}}" alt="Ícone" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class=" bg-white">
    <div class="mx-auto max-w-screen-xl px-4 py-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            <div class="flex flex-col">
                <img class="" src="/images/login/logo_zapfrete.png" alt="">
                <p class="mx-auto mt-4 max-w-md text-center text-gray-500">
                    Informe sua demanda<br />
                    Nossa equipe de suporte entrara em contato !
                </p>
            </div>

            <form action="/dashboard" method="POST" class="mb-0 mt-6 bg-white space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                {{-- <p class="text-center text-lg font-medium">ZapFretes | Suporte</p> --}}
                @csrf
                <div>
                    <div class="border-b-2 py-2 relative flex flex-col justify-center w-full items-center">
                        <span class="ml-2 font-semibold text-xl text-black">Adicionar ou remover ?</span>
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
                        <span class="ml-2 text-black">Nome</span>
                        <input name="nome" type="text" value="{{ old('nome') }}"
                            class="{{ $errors->first('nome') ? 'w-full rounded-lg border-2 border-red-500 p-4 text-sm shadow-md' : 'w-full rounded-lg  p-4 pe-12 border-none text-sm shadow-md' }}"
                            placeholder="Digite o nome do colaborador" />
                        @error('nome')
                            <label class="text-red-500 font-semibold">Preencha esse campo !</label>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="relative">
                        <span class="ml-2 text-black">Número</span>
                        <input id="telefone_format" minlength="2" value="{{ old('numero') }}" maxlength="14" name="numero" type="text"
                            class="{{ $errors->first('numero') ? 'w-full rounded-lg border-2 border-red-500 p-4 text-sm shadow-md' : 'w-full rounded-lg  p-4 pe-12 border-none text-sm shadow-md' }}"
                            placeholder="Exemplo: (66)999999999" />
                        @error('numero')
                            <label class="text-red-500 font-semibold">Preencha esse campo !</label>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="relative">
                        <span class="ml-2 text-black">Transportadora</span>
                        <select class="w-full border-none shadow-md rounded-md text-black" name="transportadora" id="">
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
                    <div class="relative">
                        <span class="ml-2 text-black">Filial</span>
                        <input name="filial" type="text" value="{{ old('filial') }}"
                            class="{{ $errors->first('filial') ? 'w-full rounded-lg border-2 border-red-500 p-4 text-sm shadow-md' : 'w-full rounded-lg border-none p-4 pe-12 text-sm shadow-md' }}"
                            placeholder="Digite a filial" />
                        @error('filial')
                            <label class="text-red-500 font-semibold">Preencha esse campo !</label>
                        @enderror
                    </div>
                </div>
                <div style="margin-bottom: 50px" class="">
                    <div class="relative">
                        <span class="ml-2 text-black">Email</span>
                        <input name="email" type="email" value="{{ old('email') }}"
                            class="{{ $errors->first('email') ? 'w-full rounded-lg border-2 border-red-500 p-4 text-sm shadow-md' : 'w-full rounded-lg  border-none p-4 pe-12 text-sm shadow-md' }}"
                            placeholder="Digite o e-mail" />
                        @error('email')
                            <label class="text-red-500 font-semibold">Preencha esse campo !</label>
                        @enderror
                    </div>
                </div>

                <button onclick="validade_numero()" type="submit"
                    class="block w-full rounded-lg bg-[#202356] px-5 py-3 text-md font-medium text-white">
                    Enviar
                </button>

                @if(Session::has('message'))
                    <script>
                        swal("Enviado com sucesso",'Nossa equipe entrará em contato', {
                            button:true,
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

<script>
    const input = document.getElementById("telefone_format");

    input.addEventListener("keyup", formatarTelefone);

    function formatarTelefone(e) {
        var v = e.target.value.replace(/\D/g, "");

        v = v.replace(/^(\d\d)(\d)/g, "($1)$2");

        v = v.replace(/(\d{5})(\d)/, "$1-$2");

        e.target.value = v;
    }

    // function validade_numero() {
    //     const input_numero = document.getElementById("telefone_format");

    //     if (input_numero.value.length < 14) {
    //         console.log('sssssss');
    //     } else {
    //         console.log('aaaa');
    //     }


    // }
</script>
