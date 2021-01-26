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
            <li><a href="{{ route('admiral-lines.stations', $line->id) }}" class="font-semibold">{{ $line->name }}</a></li>
                <li><span class="mx-2">/</span></li>
                <li>Order</li>
            </ul>
        </div>  

        <!-- backbutton -->
        <!-- between buttons -->
                        <div class="flex justify-between items-center mb-4 px-4 mx-8 lg:mx-16 xl:mx-32 2xl:mx-64  ">
                            <a href="{{ route('admiral-lines.stations', $line->id) }}">
                                <button class="w-24 bg-red-300  rounded shadow py-2 px-3 text-white font-bold">
                                    Back
                                </button>
                            </a>

                        @if (!$line->haveChild($line->id) && !$line->isChild() && $line->stations()->count() > 0 )
                           <a href="{{ route('admiral-lines.return', $line->id) }}">
                                
                                    Return Line ?
                            
                            </a>
                        @endif
                                
                                    
                                
                           
                            
                        </div>
                               


<livewire:line-order :line="$line"/>        

                    

    </div>

</div>
@endsection    

@push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
@endpush 