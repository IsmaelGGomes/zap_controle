<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Registro</title>
</head>

<body>
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 py-2">
        <div class="
          flex flex-col
          bg-white
          shadow-md
          px-4
          sm:px-6
          md:px-8
          lg:px-10
          py-8
          rounded-3xl
          w-[26em]
          sm:w-[26em]
          md:w-[30em]
          lg:w-[50em]
          items-center
        ">
            <div class="w-auto h-auto">
                <img src="/images/login/clubedoor_semfundo.png" alt="" class="object-contain sm:w-[18em] w-[14em] h-[7em]">
            </div>
            <div class="mt-2 self-center sm:text-[22px] text-[18px] text-gray-800 font-semibold">
                Cadastro de usuário
            </div>

            <div class="mt-6">
                <form method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="flex flex-col mb-5">
                        <label for="name" class="mb-1 text-md sm:text-xl tracking-wide text-gray-600">Nome<span
                                class="text-red-500">*</span></label>
                        <div class="relative">
                            <input id="name" type="text" name="name" class="
                                text-[18px]
                                placeholder-gray-500
                                py-4
                                rounded-2xl
                                border border-gray-400
                                w-full
                                focus:outline-none focus:border-blue-400
                            " placeholder="Insira seu nome completo" />
                        </div>
                    </div>
                    <div class="flex flex-col mb-5">
                        <label for="email" class="mb-1 text-md sm:text-xl tracking-wide text-gray-600">Seu E-mail<span
                                class="text-red-500">*</span></label>
                        <div class="relative">
                            <input id="email" type="email" name="email" class="
                                text-[18px]
                                placeholder-gray-500
                                rounded-2xl
                                border border-gray-400
                                w-full
                                py-4
                                focus:outline-none focus:border-blue-400
                            " placeholder="Seu melhor e-mail" />
                        </div>
                    </div>
                    <div class="flex flex-row gap-5">
                        <div class="flex flex-col mb-5">
                            <label for="email" class="mb-1 text-md sm:text-xl tracking-wide text-gray-600">Crie uma senha<span
                                    class="text-red-500">*</span></label>
                            <div class="relative">
                                <input id="password" type="password" name="password" class="
                                text-[18px]
                                placeholder-gray-500
                                rounded-2xl
                                border border-gray-400
                                w-full
                                py-4
                                focus:outline-none focus:border-blue-400
                            " placeholder="Insira uma senha" />
                            </div>
                        </div>
                        <div class="flex flex-col mb-5">
                            <label for="email" class="mb-1  text-md sm:text-xl sm:text-xl tracking-wide text-gray-600">Confirme sua senha<span
                                    class="text-red-500">*</span></label>
                            <div class="relative">
                                <input id="password_confirmation" type="password" name="password_confirmation" class="
                                text-[18px]
                                placeholder-gray-500
                                rounded-2xl
                                border border-gray-400
                                w-full
                                pl-2
                                py-4
                                focus:outline-none focus:border-blue-400
                            " placeholder="Confirme" />
                            </div>
                        </div>
                    </div>

                    <div class="flex w-full">
                        <button type="submit" class="
                        flex
                        mt-2
                        items-center
                        justify-center
                        focus:outline-none
                        text-white text-sm
                        sm:text-base
                        bg-[#8ac543] 
                        hover:bg-[#618E2C]
                        rounded-2xl
                        py-4
                        w-full
                        transition
                        duration-150
                        ease-in
                        ">
                            <span class="mr-2 font-semibold text-[20px]">Criar conta</span>

                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex justify-center items-center mt-6">
            <a href="#" target="_blank" class="
            inline-flex
            items-center
            text-gray-700
            font-medium
            text-2xl text-center
          ">
                <span class="ml-2 sm:text-[22px] text-[17px] text-gray-800">Você tem uma conta?
                    <a href="/login" class="sm:text-[22px] text-[17px] ml-2 text-[#2c2565] font-semibold">Login</a></span>
            </a>
        </div>
    </div>
</body>


</html>