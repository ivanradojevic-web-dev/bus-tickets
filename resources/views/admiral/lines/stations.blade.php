@extends('admiral')

@section('content')

       <div class=" w-full flex flex-col">

                
                    <!-- overflow -->
                    <div class="content-spotify overflow-y-auto py-8 ">

                        <!-- breadcrumb -->
                        <div class=" p-4 mx-4 lg:mx-8 xl:mx-16 2xl:mx-32">
                            <ul class="flex text-gray-800 ">
                                <li><a href="{{ url('/admiral') }}" class="font-semibold">Home</a></li>
                                <li><span class="mx-2">/</span></li>
                                <li><a href="{{ route('admiral-lines.index') }}" class="font-semibold">Lines</a></li>
                                <li><span class="mx-2">/</span></li>
                                <li>{{ $line->name }}</li>
                            </ul>
                        </div>  

                        <!-- add button -->
                        <div class="flex justify-between mb-4 px-4 mx-4 lg:mx-8 xl:mx-16 2xl:mx-32  ">
                            <a href="{{ route('admiral-lines.index') }}">
                                <button class="w-24 bg-red-300  rounded shadow py-2 px-3 text-white font-bold">
                                    Back
                                </button>
                            </a>
                            @if($line->stations()->count() > 0)
                            <a href="{{ route('admiral-lines.order', $line->id) }}">
                                <button class="w-24 bg-green-500 rounded shadow py-2 px-3 text-white font-bold">
                                    Edit
                                </button>
                            </a>
                            @else
                                <button class="opacity-50 cursor-not-allowed w-24 bg-green-500 rounded shadow py-2 px-3 text-white font-bold">
                                    Edit
                                </button>
                            @endif
                        </div>


<livewire:line-stations :line="$line" />


                    </div>

                </div>

@endsection           