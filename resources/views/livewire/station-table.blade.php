<div>

<!-- session success message --> 
        @if ($forbiddenMessage)
        <div class="py-2 px-4 mt-2 flex justify-between items-center mx-8 lg:mx-16 xl:mx-32 2xl:mx-64 bg-red-500 font-semibold bg-opacity-75 text-white rounded shadow">
            <div class="flex items-center space-x-4">
                <x-zondicon-checkmark-outline class="w-4 h-4" />
                <p>{{ $forbiddenMessage }}</p>
            </div>
            <button>x</button>
        </div>
        @endif




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
              
              <td class="w-5/12 px-6 py-3 whitespace-nowrap">
                <p class="truncate text-sm text-gray-800">{{ Str::limit($station->name, 24) }}</p>
              </td>

              <td class="w-5/12 px-6 py-3 whitespace-nowrap">
                <div class="pl-1">
                @if($station->country === "Austrija")
                <img class="w-6 h-4" src="https://lipis.github.io/flag-icon-css/flags/4x3/at.svg">
                @elseif($station->country === "Srbija")
                <img class="w-6 h-4" src="https://lipis.github.io/flag-icon-css/flags/4x3/rs.svg">
                @elseif($station->country === "Nemačka")
                <img class="w-6 h-4" src="https://lipis.github.io/flag-icon-css/flags/4x3/de.svg">
                @elseif($station->country === "Švajcarska")
                <img class="w-6 h-4" src="https://lipis.github.io/flag-icon-css/flags/4x3/ch.svg">
                @else
                <p class="truncate text-sm text-gray-800">{{ Str::limit($station->country, 24) }}</p>
                @endif
              </div>
              </td>

              <td class="w-2/12 px-6 py-3 whitespace-nowrap text-right text-sm font-medium ">
                <div class="flex justify-end items-center space-x-2">
                <a wire:click.prevent="edit( {{ $station->id }} )" href="#" >
                  <x-zondicon-edit-pencil class="w-4 h-4 text-green-300 hover:text-green-400" />
                </a>
                <a wire:click.prevent="deleteModal( {{ $station->id }} )" href="#" class="">
                  <x-zondicon-trash class="w-4 h-4  text-red-300 hover:text-red-400" />
                </a>
               </div>
              </td>
            </tr>
@endforeach          

          </tbody>
        </table>
<div>
    {{ $stations->links() }}
</div>
    </div>

<!-- update form modal -->
<form wire:submit.prevent="putStation">
<x-modal wire:model.defer="showEditModal"> 

   <x-slot name="title">Update Station</x-slot>

   <x-slot name="content">
        <div class="flex flex-wrap">                        
            <div class="w-full mb-6">
                                <label for="name" class="block text-sm mb-2 text-gray-800 ">Name</label>
                                <input wire:model="name" id="name" type="text" value="" class="w-full text-base border-2 border-gray-300
                                @error('name') border-red-400 @enderror rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500">
                                @error('name')
                                    <p class="text-red-400">{{ $message }}</p>
                                @enderror   
            </div>
            <div class="w-full mb-6">
                                <label for="country" class="block text-sm mb-2 text-gray-800 ">Select Country</label>
                                <select wire:model="editingCountry" id="country" class="w-full text-base border-2 border-gray-300 @error('editingCountry') border-red-400 @enderror rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500 ">
                                    @foreach (App\Models\Station::COUNTRIES as $value)
                                        <option value="{{ $value }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('editingCountry')
                                    <p class="text-red-400">{{ $message }}</p>
                                @enderror
            </div>                           
        </div>
   </x-slot>

   <x-slot name="footer">
        <div class="flex justify-end items-center bg-gray-200 space-x-8 py-2 px-6 ">
            <a href="#" class="font-bold text-gray-600 tracking-wider">Cancel</a>
            <button type="submit" class="w-24 bg-green-500 rounded shadow py-2 px-3 text-white font-bold">Update</button>
        </div>
   </x-slot>

</x-modal> 
</form>


<!-- remove station form modal -->
<form wire:submit.prevent="deleteStation">
<x-modal wire:model.defer="showDeleteModal"> 

   <x-slot name="title">Remove Station</x-slot>

   <x-slot name="content">
        <div class="flex flex-wrap">                        
            <div class="w-full mb-6">
                                <label for="station" class="block text-sm mb-2 text-gray-800 ">Are you sure want to delete?</label>

            </div>                           
        </div>
   </x-slot>

   <x-slot name="footer">
        <div class="flex justify-end items-center bg-gray-200 space-x-8 py-2 px-6 ">
            <a href="#" class="font-bold text-gray-600 tracking-wider">Cancel</a>
            <button type="submit" class="w-24 bg-green-500 rounded shadow py-2 px-3 text-white font-bold">Remove</button>
        </div>
   </x-slot>

</x-modal> 
</form>


</div>






</div>


