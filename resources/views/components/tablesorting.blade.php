<th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600 tracking-wider">
    <a class="flex items-center space-x-2" href="#" wire:click.prevent="sortBy( '{{ $sort }}' )">
        @if( $sortField != $sort )
        <span>{{$title}}</span>
        <x-zondicon-code class="w-4 h-4 text-gray-400 transform rotate-90" />
        @elseif( $sortDirection ) 
        <span>{{$title}}</span>
        <x-zondicon-cheveron-up class="w-4 h-4" />
        @else
        <span>{{$title}}</span>
        <x-zondicon-cheveron-down class="w-4 h-4" />                 
        @endif  
    </a> 
</th>