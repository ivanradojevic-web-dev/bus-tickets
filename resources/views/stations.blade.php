@extends('admiral')

@section('content')

       <div class=" w-full flex flex-col">

                
                    <!-- overflow -->
                    <div class="content-spotify overflow-y-auto py-8 ">

                        <!-- breadcrumb -->
                        <div class=" p-4 mx-8 lg:mx-16 xl:mx-32 2xl:mx-64">
                            <ul class="flex text-gray-800 ">
                                <li><a href="{{ url('/admiral') }}" class="font-semibold">Home</a></li>
                                <li><span class="mx-2">/</span></li>
                                <li>Stations</li>
                            </ul>
                        </div>  

                        <!-- add button -->
                        <div class="flex justify-end mb-4 px-4 mx-8 lg:mx-16 xl:mx-32 2xl:mx-64  ">
                            <a href="#">
                                <button class="w-24 bg-green-500 rounded shadow py-2 px-3 text-white font-bold">
                                    Add
                                </button>
                            </a>
                        </div>


<livewire:station-table />


                    </div>

                </div>

@endsection                