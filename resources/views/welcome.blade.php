<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="bg-indigo-800 text-base text-grey-darkest font-normal relative">
        

        <div class="flex items-center justify-center h-screen">
    
            <div class=" text-white font-bold rounded-lg border shadow-lg p-10">
                
                <div class="container mx-auto p-8">
                    <div class="mx-auto max-w-sm">
                        
                        <div class="bg-white rounded shadow">
                            <div class="bg-pink-600 border-b py-8 font-bold text-black text-center text-xl text-pink-100 tracking-widest uppercase">
                                Welcome back!
                            </div>
            
                            <form class="bg-grey-lightest px-10 py-10" method="POST">
                                {{ csrf_field() }}
            
                                <div class="mb-3">
                                    <input class="border w-full p-3" name="email" type="text" placeholder="E-Mail / Username">
                                </div>
                                <div class="mb-6">
                                    <input class="border w-full p-3" name="password" type="password" placeholder="Password">
                                </div>
                                <div class="flex">
                                    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded w-full p-4 text-sm text-white uppercase font-bold tracking-wider">
                                        Login
                                    </button>
                                </div>
                            </form>
            
                            <div class="border-t px-10 py-6">
                                <div class="flex justify-between">
                                    <a href="#" class="font-bold text-primary hover:text-primary-dark no-underline">Don't have an account?</a>
                                    <a href="#" class="text-grey-darkest hover:text-black no-underline">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>

        
    </body>
</html>
