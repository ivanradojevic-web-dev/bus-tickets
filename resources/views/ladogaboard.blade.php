@extends('admiral')

@section('content')

<div class="w-full flex flex-col">

    <!-- overflow -->
    <div class="content-spotify overflow-y-auto py-8 ">

        <!-- breadcrumb -->
        <div class=" p-4 mx-4 lg:mx-18 xl:mx-16 2xl:mx-32">
            <ul class="flex text-gray-800 ">
                <li><a href="{{ url('/admiral') }}" class="font-semibold">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li>Dashboard</li>
            </ul>
        </div>                   

        <!-- white area -->
        <div class=" mt-2 flex flex-col mx-4 lg:mx-18 xl:mx-16 2xl:mx-32   ">
                            
            
            <div class="flex flex-wrap">
                 <div class="p-2  overflow-hidden bg-opacity-75 p-2 w-1/2 lg:w-1/4  h-64 ">
                    <div class="p-2 bg-white h-full flex flex-col justify-between border-1 border-gray-400 rounded shadow">
                        <span class="text-orange-400">
                            <x-zondicon-user-group class="w-6 h-6 text-orange-400" />
                        </span>
                        <h3 class="text-center text-orange-400 text-6xl font-thin tracking-tighter">
                                1982
                        </h3>
                        <div class="flex justify-between items-center">
                            <p class="font-bold text-gray-500 ">Total Users</p>
                            <div class="flex items-center space-x-1 pr-1">
                                <!-- 
                                <x-zondicon-arrow-outline-down class="w-4 h-4 text-red-400" /> 
                                <p class="text-red-400">15</p>
                                -->
                            </div>
                        </div> 
                    </div>  
                </div>
                <div class="p-2  overflow-hidden bg-opacity-75 p-2 w-1/2 lg:w-1/4  h-64 ">
                    <div class="p-2 bg-white h-full flex flex-col justify-between border-1 border-gray-400 rounded shadow">
                        <span class="text-orange-400">
                            <x-zondicon-user-add class="w-6 h-6 text-orange-400" />
                        </span>
                        <h3 class="text-center text-orange-400 text-6xl font-thin tracking-tighter">
                                202
                        </h3>
                        <div class="flex justify-between items-center">
                            <p class="font-bold text-gray-500 ">New Users</p>
                            <div class="flex items-center space-x-1 pr-1">
                                <x-zondicon-arrow-outline-up class="w-4 h-4 text-green-400" /> 
                                <p class="text-green-400">15</p>
                            </div>
                        </div> 
                    </div>  
                </div>
                <div class="p-2  overflow-hidden bg-opacity-75 p-2 w-1/2 lg:w-1/4  h-64 ">
                    <div class="p-2 bg-white h-full flex flex-col justify-between border-1 border-gray-400 rounded shadow">
                        <span class="text-orange-400">
                            <x-zondicon-chat-bubble-dots class="w-6 h-6 text-orange-400" />
                        </span>
                        <h3 class="text-center text-orange-400 text-6xl font-thin tracking-tighter">
                                789
                        </h3>
                        <div class="flex justify-between items-center">
                            <p class="font-bold text-gray-500 ">New Posts</p>
                            <div class="flex items-center space-x-1 pr-1">
                                <x-zondicon-arrow-outline-down class="w-4 h-4 text-red-400" /> 
                                <p class="text-red-400">49</p>
                            </div>
                        </div> 
                    </div>  
                </div>
                <div class="p-2  overflow-hidden bg-opacity-75 p-2 w-1/2 lg:w-1/4  h-64 ">
                    <div class="p-2 bg-white h-full flex flex-col justify-between border-1 border-gray-400 rounded shadow">
                        <span class="text-orange-400">
                            <x-zondicon-chat-bubble-dots class="w-6 h-6 text-orange-400" />
                        </span>
                        <h3 class="text-center text-orange-400 text-6xl font-thin tracking-tighter">
                                789
                        </h3>
                        <div class="flex justify-between items-center">
                            <p class="font-bold text-gray-500 ">New Posts</p>
                            <div class="flex items-center space-x-1 pr-1">
                                <x-zondicon-arrow-outline-down class="w-4 h-4 text-red-400" /> 
                                <p class="text-red-400">49</p>
                            </div>
                        </div> 
                    </div>  
                </div>
                <div class="overflow-hidden  p-2 w-full lg:w-1/2 h-64  ">
                    <div class="p-2 bg-white bg-opacity-75 h-full flex flex-col justify-between border-1 border-gray-400 rounded shadow">
                    <span id="chart" class="h-64">
                    </span> 
                    </div> 
                </div>  
                <div class="p-2  overflow-hidden bg-opacity-75 p-2 w-1/2 lg:w-1/4  h-64 ">
                    <div class="p-2 bg-white h-full flex flex-col justify-between border-1 border-gray-400 rounded shadow">
                        <span class="text-orange-400">
                            <x-zondicon-user-group class="w-6 h-6 text-orange-400" />
                        </span>
                        <h3 class="text-center text-orange-400 text-6xl font-thin tracking-tighter">
                                1982
                        </h3>
                        <div class="flex justify-between items-center">
                            <p class="font-bold text-gray-500 ">Total Users</p>
                            <div class="flex items-center space-x-1 pr-1">
                                <!-- 
                                <x-zondicon-arrow-outline-down class="w-4 h-4 text-red-400" /> 
                                <p class="text-red-400">15</p>
                                -->
                            </div>
                        </div> 
                    </div>  
                </div>
                <div class="p-2  overflow-hidden bg-opacity-75 p-2 w-1/2 lg:w-1/4  h-64 ">
                    <div class="p-2 bg-white h-full flex flex-col justify-between border-1 border-gray-400 rounded shadow">
                        <span class="text-orange-400">
                            <x-zondicon-user-add class="w-6 h-6 text-orange-400" />
                        </span>
                        <h3 class="text-center text-orange-400 text-6xl font-thin tracking-tighter">
                                202
                        </h3>
                        <div class="flex justify-between items-center">
                            <p class="font-bold text-gray-500 ">New Users</p>
                            <div class="flex items-center space-x-1 pr-1">
                                <x-zondicon-arrow-outline-up class="w-4 h-4 text-green-400" /> 
                                <p class="text-green-400">15</p>
                            </div>
                        </div> 
                    </div>  
                </div>
                <div class="p-2  overflow-hidden bg-opacity-75 p-2 w-1/2 lg:w-1/4  h-64 ">
                    <div class="p-2 bg-white h-full flex flex-col justify-between border-1 border-gray-400 rounded shadow">
                        <span class="text-orange-400">
                            <x-zondicon-chat-bubble-dots class="w-6 h-6 text-orange-400" />
                        </span>
                        <h3 class="text-center text-orange-400 text-6xl font-thin tracking-tighter">
                                789
                        </h3>
                        <div class="flex justify-between items-center">
                            <p class="font-bold text-gray-500 ">New Posts</p>
                            <div class="flex items-center space-x-1 pr-1">
                                <x-zondicon-arrow-outline-down class="w-4 h-4 text-red-400" /> 
                                <p class="text-red-400">49</p>
                            </div>
                        </div> 
                    </div>  
                </div>
                <div class="p-2  overflow-hidden bg-opacity-75 p-2 w-1/2 lg:w-1/4  h-64 ">
                    <div class="p-2 bg-white h-full flex flex-col justify-between border-1 border-gray-400 rounded shadow">
                        <span class="text-orange-400">
                            <x-zondicon-chat-bubble-dots class="w-6 h-6 text-orange-400" />
                        </span>
                        <h3 class="text-center text-orange-400 text-6xl font-thin tracking-tighter">
                                789
                        </h3>
                        <div class="flex justify-between items-center">
                            <p class="font-bold text-gray-500 ">New Posts</p>
                            <div class="flex items-center space-x-1 pr-1">
                                <x-zondicon-arrow-outline-down class="w-4 h-4 text-red-400" /> 
                                <p class="text-red-400">49</p>
                            </div>
                        </div> 
                    </div>  
                </div>
                <div class="overflow-hidden  p-2 w-full lg:w-1/2 h-64  ">
                    <div class="p-2 bg-white bg-opacity-75 h-full flex flex-col justify-between border-1 border-gray-400 rounded shadow">
                    <span id="chart2" class="h-64">
                    </span> 
                    </div> 
                </div>  
                             
            </div>

           

        </div>                

    </div>

</div>



@endsection                