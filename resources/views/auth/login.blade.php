<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<div class="min-h-screen bg-white flex">
    <div class="hidden lg:block relative w-0 flex-1 bg-white text-white">
        <div class="flex h-full justify-center items-center">
            <img src="/images/login/undraw_Visionary_technology_re_jfp7.png" alt="">
        </div>
    </div>
    <div class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:px-20 xl:px-24 lg:flex-none shadow-inner">
        <div class="mx-auto w-full max-w-sm lg:w-96">
            <div class="">
                <div class="flex justify-center">
                    <img src="/images/login/clubedoor_semfundo.png" alt=""
                        class="object-contain w-[18em] h-[7em]">
                </div>
                <h2 class="mt-6 text-3xl font-semibold text-[#8ac543]">Entrar</h2>
                <p class="mt-2 text-sm text-gray-600 max-w">Novo por aqui ? <a type="submit" href="register"
                        class="font-semibold text-md text-[#2A2365]">Registre-se agora.</a></p>
            </div>
            <div class="mt-6">

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-4">
            <input id="email" name="email" type="text" placeholder="E-mail"
                class="appearance-none block w-full py-3 px-4 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded-xl focus: outline-none">
        </div>
        <div class="mb-4">
            <input type="password" id="password"  name="password" placeholder="Senha"
                class="appearance-none block w-full py-3 px-4 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded-xl focus: outline-none">
        </div>
        <div class="mb-4">
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
                <span class="mr-2 font-semibold text-[20px]">Entrar</span>

            </button>
        </div>
        
        </div>
    </form>
</div>
</div>
</div>
</div>

</html>
