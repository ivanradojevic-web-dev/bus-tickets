<div class="flex justify-center mx-8 lg:mx-16 xl:mx-32 2xl:mx-64  mt-2">      

    <div class="w-full flex-col space-y-4">

        <table class="min-w-full divide-y divide-gray-300 border-1 border-gray-400 rounded shadow">
          <thead class="bg-gray-200 ">
            <tr>

              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600 tracking-wider">	
              	<span>Order</span> 
              </th>

             <th scope="col" class="flex space-x-2 items-center px-6 py-3 text-left  font-semi-bold text-gray-600  tracking-wider">   	
                 <span>Stations</span> 
                 <button wire:click.prevent="selectModal">   
                   <x-zondicon-list-add class="w-4 h-4 " />
                 </button>
             </th>	

             <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600 tracking-wider">  
               
              </th>            

              <th scope="col" class=" px-3 py-3 text-left  font-semi-bold text-gray-600  tracking-wider">
                <span class="">Sort</span>
              </th>

            </tr>
          </thead>

          <tbody wire:sortable="updateItemOrder" class="bg-white bg-opacity-75 divide-y divide-gray-200">
@foreach ($stations as $station)
            <tr wire:sortable.item="{{ $station->id }}" wire:key="station-{{ $station->id }}" class="hover:bg-orange-50">
              
              <td class="w-5/12 px-6 py-3 whitespace-nowrap">
                <p class="truncate text-sm text-gray-800">{{ $station->pivot->order }}</p>
              </td>

              <td class="w-5/12 px-6 py-3 whitespace-nowrap">
                <p class="truncate text-sm text-gray-800">{{ $station->name }}</p>
              </td>

              <td class="w-1/12 px-6 py-3 whitespace-nowrap text-right text-sm font-medium ">
                <a wire:click.prevent="deleteModal( {{ $station->id }} )" href="#" class="">
                  <x-zondicon-trash class="w-4 h-4  text-red-300 hover:text-red-400" />
                </a>              
              </td>

              <td wire:sortable.handle class="text-center w-1/12 px-6 py-3 whitespace-nowrap text-right text-sm font-medium ">
                <button class="mr-2 flex items-center space-x-2">               
                  <x-zondicon-queue class="w-4 h-4 text-orange-300 hover:text-orange-400" />               
               </button>
              </td>

            </tr>            
@endforeach

         </tbody>

        </table>
    </div>



<!-- add station form modal -->
<form wire:submit.prevent="addStation">
<x-modal wire:model.defer="showSelectModal"> 

   <x-slot name="title">Add Station to the line</x-slot>

   <x-slot name="content">
        <div class="flex flex-wrap">                        
            <div class="w-full mb-6">
                                <label for="station" class="block text-sm mb-2 text-gray-800 ">Select Station</label>
                                <select wire:model="station" id="station" class="w-full text-base border-2 border-gray-300 @error('station') border-red-400 @enderror rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500 ">
                                        <option value=""></option>
                                @foreach ($notstations as $station)    
                                        <option value="{{ $station->id }}">{{ $station->name }}</option>
                                @endforeach   
                                </select>
                                @error('station')
                                    <p class="text-red-400">{{ $message }}</p>
                                @enderror
            </div>                           
        </div>
   </x-slot>

   <x-slot name="footer">
        <div class="flex justify-end items-center bg-gray-200 space-x-8 py-2 px-6 ">
            <a href="#" class="font-bold text-gray-600 tracking-wider">Cancel</a>
            <button type="submit" class="w-24 bg-green-500 rounded shadow py-2 px-3 text-white font-bold">Add</button>
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
