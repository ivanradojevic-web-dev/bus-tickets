<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Livewire css -->    
        @livewireStyles

        <style>
            .sidebar-spotify::-webkit-scrollbar
                {
                    width: 10px;
                    background-color: #334155;
                }
            .sidebar-spotify::-webkit-scrollbar-thumb {
                    border-radius: 10px;
                    background-color: #94A3B8;
                }
            .content-spotify::-webkit-scrollbar
                {
                    width: 10px;
                    background-color: #F1F5F9;
                }
            .content-spotify::-webkit-scrollbar-thumb {
                    border-radius: 10px;
                    background-color: #94A3B8;
                } 
            .button-color {
                    background-color: #00BBDD;
                    color: white;
                }   
        </style>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">

    <!-- Head relative zbog mobajl skrolbarovanja-->
        <div class="relative h-screen flex flex-col bg-gray-100 text-gray-900 overflow-y-hidden">

            <!-- navbar -->
            <div x-data="{ open: false }"  
            class="h-12 relative text-sm text-gray-300 p-4 bg-gray-600 shadow-m flex justify-between items-center">

                <!-- left nav -->
                <div class="flex items-center">
                    <div class="md:hidden pt-1 mr-4">         
                            <div @click="open = true">
                                <button x-show.transition.in="!open" class="focus:outline-none transition duration-150 ease-in-out">
                                    <x-zondicon-menu class="w-4 h-4 " />
                                </button>
                            </div>  
                             <div x-show.transition.in="open" @click="open = false">
                                <button class="focus:outline-none transition duration-150 ease-in-out">
                                    <x-zondicon-close class="w-4 h-4 " />
                                </button>
                            </div>                
                    </div>
                    <div>Ladoga Admiral</div>
                </div>

                <div class="ml-4 relative flex items-center ">
                    <input type="search" placeholder="Search..." class="bg-gray-600 border-2 border-gray-400 focus:ring-gray-50 focus:outline-none focus:border-gray-50 text-gray-50 placeholder-gray-400 rounded-full px-3 pl-12 py-1">
                    <div class="absolute inset-y-0 left-0 pl-2  pt-2">
                        <x-zondicon-search class="text-gray-50  w-6 h-4 " />
                    </div>
                </div>   
              
                <!-- profile dropdown -->
                <x-dropdown />

                <!-- alpine sidebar slider-->
                <div 
                x-show="open"  
                x-on:resize.window="open = window.innerWidth >= 768 ? false : open"              
                x-transition:enter="transition ease-out duration-300 -ml-64"
                x-transition:enter-start=""
                x-transition:enter-end="transform translate-x-64"
                x-transition:leave="transition ease-out duration-300"
                x-transition:leave-start=""
                x-transition:leave-end="transform -translate-x-64"
                class="absolute z-50 left-0 top-0 mt-12" style="display: none;"
                @click.away="open = false" @click="open = false">

                    <div class="flex-none w-64 bg-gray-700 flex flex-col text-gray-300 text-sm font-semibold ">
                
                        <div class="h-screen flex flex-col justify-between ">

                            <div class="sidebar-spotify overflow-y-auto shadow">

                    <ul class="pt-4">
                        <li class="border-l-4 border-orange-500">
                            <a href="" class="flex items-center ml-4 mt-4 text-white">
                                <x-zondicon-dashboard class="w-4 h-4 " />
                                <span class="ml-2 " >Dashboard</span>
                            </a>   
                        </li>
                        <li class="">
                            <a href="" class="flex items-center ml-4 mt-4">
                                <x-zondicon-compose class="w-4 h-4 " />
                                <span class="ml-2 " >Form</span>
                            </a>     
                        </li>
                        <li class="">
                            <a href="#" class="flex items-center ml-4 mt-4">
                                <x-zondicon-view-column class="w-4 h-4 " />
                                <span class="ml-2 " >Table</span>
                            </a>     
                        </li>
                    </ul>  

                    <ul class="pt-4">
                        <li class="uppercase tracking-widest font-normal text-xs ml-4 mt-4">
                            Headline with icons
                        </li>
                        <li class="">
                            <a href="#" class="hover:text-white flex items-center ml-4 mt-4">
                                <x-zondicon-compose class="w-4 h-4 " />
                                <span class="ml-2 " >Form</span>
                            </a>     
                        </li>
                        <li class="">
                            <a href="#" class="hover:text-white flex items-center ml-4 mt-4">
                                <x-zondicon-view-column class="w-4 h-4 " />
                                <span class="ml-2 " >Table</span>
                            </a>     
                        </li>
                        <li class="">
                            <a href="#" class="hover:text-white flex items-center ml-4 mt-4">
                                <x-zondicon-compose class="w-4 h-4 " />
                                <span class="ml-2 " >Form</span>
                            </a>     
                        </li>
                    </ul>  

                    <ul class="pt-4">
                        <li class="uppercase tracking-widest font-normal text-xs mx-4 mt-4">
                            Headline without icons
                        </li>
                       
                        <li class="">
                            <a href="#" class="flex items-center ml-4 mt-4">
                                
                                <span class="" >Form</span>
                            </a>     
                        </li>     
                        
                        <li class="">
                            <a href="#" class="flex items-center ml-4 mt-4">
                                
                                <span class="" >Table</span>
                            </a>     
                        </li>
                        <li class="">
                            <a href="#" class="flex items-center ml-4 mt-4">
                              
                                <span class="" >Form</span>
                            </a>     
                        </li>
                    </ul>

                                <ul class="pt-4">
                                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                </ul>

                            </div>

                        </div>

                    </div>   

                </div>   


            </div> <!-- navbar -->


            <!-- down -->
            <div class="flex overflow-y-hidden">

                <!-- Desktop Sidebar -->
                <x-sidebar />

                <!-- Content -->
         		@yield('content')
				<!-- end of content-->

            </div> <!-- down -->

        </div> <!-- End of Head-->

        <!-- Livewire js -->
        @livewireScripts
        <!-- Apex js cdn -->
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>




<script>
    
var options = {
  colors:['#22D3EE', '#E91E63', '#9C27B0'],  
  chart: {
    type: 'line',
    height: '100%' 
  },
  series: [{
    name: 'sales',
    data: [30,40,35,50,49,60,70,91,125]
  }],
  xaxis: {
    categories: [1991,1992,1993,1994,1995,1996,1997, 1998,1999]
  }
}

var chart = new ApexCharts(document.querySelector("#chart"), options);
var chart2 = new ApexCharts(document.querySelector("#chart2"), options);

chart.render();
chart2.render();

</script>

<script>
    
var options = {
          series: [44, 55, 41, 17, 15],
          chart: {
          type: 'donut',

        },
        responsive: [{
          //breakpoint: 480,
          options: {
            chart: {
              height: '100%' 
            },
            
          }
        }]
        };

var graph = new ApexCharts(document.querySelector("#graph"), options);

graph.render();

</script>






    </body>
</html>