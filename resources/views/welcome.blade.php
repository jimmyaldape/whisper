<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Whisper</title>

    <!-- Fonts -->
{{--    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}


{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>
<body class="antialiased h-full">
{{--@if(flash()->message)--}}
{{--    <div class="bg-blue-600">--}}
{{--        <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">--}}
{{--            <div class="flex items-center justify-between flex-wrap">--}}
{{--                <div class="w-0 flex-1 flex items-center">--}}
{{--                        <span class="flex p-2 rounded-lg bg-blue-800">--}}
{{--                          <!-- Heroicon name: outline/speakerphone -->--}}
{{--                          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />--}}
{{--                          </svg>--}}
{{--                        </span>--}}
{{--                    <p class="ml-3 font-medium text-white truncate">--}}
{{--                        <span class="inline">{{ flash()->message }}</span>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">--}}
{{--                    <button type="button" class="-mr-1 flex p-2 rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">--}}
{{--                        <span class="sr-only">Dismiss</span>--}}
{{--                        <!-- Heroicon name: outline/x -->--}}
{{--                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endif--}}

<div class="bg-white min-h-full px-4 py-16 sm:px-6 sm:py-24 md:grid md:place-items-center lg:px-8">
    <div class="max-w-max mx-auto">
        <main class="sm:flex">
            <div class="sm:ml-6">
                <div class="sm:border-l sm:border-gray-200 sm:pl-6">
                    <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">Whisper</h1>
                    <p class="mt-1 text-base text-gray-500">A laravel websocket server for the everyday man.</p>
                </div>
                <div class="mt-10 flex space-x-3 sm:border-l sm:border-transparent sm:pl-6">
                    <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500"> Login</a>
                </div>
            </div>
        </main>
    </div>
</div>



</body>
</html>
