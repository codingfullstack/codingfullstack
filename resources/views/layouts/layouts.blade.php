<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Portfolio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @livewireStyles


</head>

<body  class=" text-white bg-black antialiased">

    <nav class=" px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800 border-b-4">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a  href="{{'/example-app/public'}}"  class="flex items-center">
                <h1 class="self-center text-3xl font-semibold whitespace-nowrap text-white">CodingFullStack</h1>
            </a>
            <button  data-collapse-toggle="mobile-menu" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm  rounded-lg md:hidden  focus:outline-none focus:ring-2  text-gray-400 hover:bg-gray-700 focus:ring-gray-600"
                aria-controls="mobile-menu" aria-expanded="false">

                <svg id="hamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg id="x"  class=" hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                    <li>
                      <a href="{{'/example-app/public'}}" class="block py-2 pr-4 pl-3  rounded md:bg-transparent  md:p-0 text-white" aria-current="page">Home</a>
                    </li>
                    <li>
                      <a href="{{'work'}}" class="block py-2 pr-4 pl-3  rounded md:bg-transparent  md:p-0 text-white">Work</a>
                    </li>
                    <li>
                        <a href="{{'about'}}" class="block py-2 pr-4 pl-3  rounded md:bg-transparent  md:p-0 text-white">About</a>
                      </li>
                      <li>
                        <a href="{{'contact'}}" class="block py-2 pr-4 pl-3  rounded md:bg-transparent  md:p-0 text-white">Contact</a>
                      </li>
                  </ul>
            </div>
        </div>
    </nav>

    <div class="sm:container md:container lg:container xl:container sm:mx-5 md:mx-5 mx-5 lg:mx-5 xl:mx-auto">
        @yield('content')
    </div>

    @livewireScripts
    <script>


   const btn = document.getElementById('hamburger');
   const x = document.getElementById('x');
   btn.addEventListener('click', ()=>{
       console.log(btn)
       const mobile = document.getElementById('mobile-menu');
       console.log(mobile);
       mobile.classList.remove('hidden');
       btn.classList.add('hidden');
       x.classList.remove('hidden');
   });
   x.addEventListener('click', ()=>{
       console.log(btn)
       const mobile = document.getElementById('mobile-menu');
       console.log(mobile);
       mobile.classList.add('hidden');
       btn.classList.remove('hidden');
       x.classList.add('hidden');
   });

    </script>
</body>
</html>
