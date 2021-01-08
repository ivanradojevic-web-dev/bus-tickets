<div class="flex justify-center mx-8 lg:mx-16 xl:mx-32 2xl:mx-64  mt-2">            
    <div class="w-full flex-col space-y-4">

        <table class="min-w-full divide-y divide-gray-300 border-1 border-gray-400 rounded shadow">
          <thead class="bg-gray-200 ">
            <tr>

              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600 tracking-wider">
              	<a class="flex items-center space-x-2" href="#" wire:click.prevent="sortBy('name')">
                	@if ($sortField != 'name')
                		<span>Name</span>
                 		<x-zondicon-code class="w-4 h-4 transform rotate-90" />
                	@elseif($sortDirection) 
                		<span>Name</span>
                 		<x-zondicon-cheveron-up class="w-4 h-4" />
                	@else
                		<span>Name</span>
                 		<x-zondicon-cheveron-down class="w-4 h-4" />
               		 
                	@endif	
                </a> 
              </th>

              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600  tracking-wider">
                <a class="flex items-center space-x-2" href="#" wire:click.prevent="sortBy('country')">
                	@if ($sortField != 'country')
                		<span>Country</span>
                 		<x-zondicon-code class="w-4 h-4 transform rotate-90" />
                	@elseif($sortDirection) 
                		<span>Country</span>
                 		<x-zondicon-cheveron-up class="w-4 h-4" />
                	@else
                		<span>Country</span>
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
@foreach ($stations as $station)
            <tr class="hover:bg-orange-50">
              
              <td class="px-6 py-3 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $station->name }}</div>
              </td>

              <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-500">
                {{ $station->country }}
              </td>

              <td class="px-6 py-3 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-green-600 hover:text-green-900">Edit</a>
              </td>
            </tr>
@endforeach          

          </tbody>
        </table>
<div>
    {{ $stations->links() }}
</div>
    </div>
</div>

