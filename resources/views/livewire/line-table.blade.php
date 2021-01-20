<div class="flex justify-center mx-8 lg:mx-16 xl:mx-32 2xl:mx-64  mt-2">      

    <div class="w-full flex-col space-y-4">

        <table class="min-w-full divide-y divide-gray-300 border-1 border-gray-400 rounded shadow">
          <thead class="bg-gray-200 ">
            <tr>

              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600 tracking-wider">
                <a class="flex items-center space-x-2" href="#" wire:click.prevent="sortBy('name')">
                  @if ($sortField != 'name')
                    <span>Line Name</span>
                    <x-zondicon-code class="w-4 h-4 text-gray-400 transform rotate-90" />
                  @elseif($sortDirection) 
                    <span>Line Name</span>
                    <x-zondicon-cheveron-up class="w-4 h-4" />
                  @else
                    <span>Line Name</span>
                    <x-zondicon-cheveron-down class="w-4 h-4" />
                   
                  @endif  
                </a> 
              </th>

             <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600  tracking-wider">
                <a class="flex items-center space-x-2" href="#" wire:click.prevent="sortBy('id')">
                	@if ($sortField != 'id')
                		<span>Stations</span>
                 		<x-zondicon-code class="w-4 h-4 text-gray-400 transform rotate-90" />
                	@elseif($sortDirection) 
                		<span>Stations</span>
                 		<x-zondicon-cheveron-up class="w-4 h-4" />
                	@else
                		<span>Stations</span>
                 		<x-zondicon-cheveron-down class="w-4 h-4" />            		 
                	@endif	
                </a>
              </th>	            

              <th scope="col" class="relative px-6 py-4">
                <span class="sr-only">Edit</span>
              </th>

            </tr>
          </thead>
          <tbody class="bg-white bg-opacity-75 divide-y divide-gray-200">
@foreach ($lines as $line)
            <tr class="hover:bg-orange-50">
              
              <td class="w-5/12 px-6 py-3 whitespace-nowrap">
                <p class="truncate text-sm text-gray-800">{{ Str::limit($line->name, 24) }}</p>
              </td>

              <td class="w-5/15 px-6 py-3 whitespace-nowrap">
                <p class="truncate text-sm text-gray-800">{{ Str::limit($line->stations_count, 24) }}</p>
              </td>

              <td class="w-2/12 px-6 py-3 whitespace-nowrap text-right text-sm font-medium ">
                <div class="flex justify-end items-center space-x-2">
                <a href="{{ route('admiral-lines.stations', $line->id) }}" >
                  <x-zondicon-view-show class="w-4 h-4 text-orange-300 hover:text-orange-400" />
                </a>
               </div>
              </td>
            </tr>
@endforeach          

          </tbody>
        </table>
<div>
    {{ $lines->links() }}
</div>
    </div>

<!-- update form modal -->


</div>