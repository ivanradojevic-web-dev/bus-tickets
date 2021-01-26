@extends('admiral')

@section('content')
<div class="w-full  flex flex-col">

    <!-- overflow -->
    <div class="content-spotify overflow-y-auto py-8 ">

        <!-- breadcrumb -->
        <div class=" p-4 mx-8 lg:mx-16 xl:mx-32 2xl:mx-64">
            <ul class="flex text-gray-800 ">
                <li><a href="{{ url('/admiral') }}" class="font-semibold">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="{{ route('admiral-lines.index') }}" class="font-semibold">Lines</a></li>
                <li><span class="mx-2">/</span></li>
        <li><a href="{{ route('admiral-lines.stations', $line->id) }}" class="font-semibold">{{ $line->name }}</a>
            <li><span class="mx-2">/</span></li>
            <li><a href="{{ route('admiral-lines.order', $line->id) }}" class="font-semibold">Edit</a> 
            </li>
                <li><span class="mx-2">/</span></li>
                <li>Return Line</li>
            </ul>
        </div>         

        <!-- backbutton -->
                        <div class="flex  mb-4 px-4 mx-8 lg:mx-16 xl:mx-32 2xl:mx-64  ">
                            <a href="{{ route('admiral-lines.order', $line->id) }}">
                                <button class="w-24 bg-red-300  rounded shadow py-2 px-3 text-white font-bold">
                                    Back
                                </button>
                            </a>
                        </div>  

        
<livewire:line-return :line="$line"/>                                  
                    

    </div>

</div>
@endsection                