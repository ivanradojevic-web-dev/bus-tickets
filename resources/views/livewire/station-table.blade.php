<div class="flex justify-center mx-8 lg:mx-16 xl:mx-32 2xl:mx-64  mt-2">            
    <div class="w-full flex-col space-y-4">

        <table class="min-w-full divide-y divide-gray-300 border-1 border-gray-400 rounded shadow">
          <thead class="bg-gray-200 ">
            <tr>

              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600 tracking-wider">
              	<a class="flex items-center space-x-2" href="#" wire:click.prevent="sortBy('name')">
                	@if ($sortField != 'name')
                		<span>Name</span>
                 		<x-zondicon-code class="w-4 h-4 text-gray-400 transform rotate-90" />
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
                 		<x-zondicon-code class="w-4 h-4 text-gray-400 transform rotate-90" />
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
              
              <td class="w-5/15 px-6 py-3 whitespace-nowrap">
                <p class="truncate text-sm text-gray-800">{{ Str::limit($station->name, 24) }}</p>
              </td>

              <td class="w-5/12 px-6 py-3 whitespace-nowrap">
                <p class="truncate text-sm text-gray-800">{{ Str::limit($station->country, 24) }}</p>
              </td>

              <td class="w-2/12 px-6 py-3 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="flex justify-end items-center space-x-2">
                  <x-zondicon-edit-pencil class="w-4 h-4 text-green-300 hover:text-green-400" />
                  <x-zondicon-trash class="w-4 h-4 text-red-300 hover:text-red-400" />
                </a>
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

