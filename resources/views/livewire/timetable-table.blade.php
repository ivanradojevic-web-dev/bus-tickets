<div class="flex flex-col space-y-4 mx-4 lg:mx-8 xl:mx-16 2xl:mx-32">

<div x-data="{ open: false }" class="px-4 gornji">



<!-- vidljivi filteri -->   
<div class="flex justify-between items-center">

  <div class="flex items-center space-x-4">
	 <div class="w-64 ">                               
    <select wire:model="lineselect" id="line" class="w-full form-select text-base border-2 border-gray-300 rounded shadow px-3 py-1 focus:outline-none focus:ring-green-500 focus:border-green-500 ">
    	<option value="">All Lines</option>
    @foreach (App\Models\Line::all() as $line)
    	<option value="{{ $line->id }}">{{ $line->name }}</option>
    @endforeach
    </select>                         
    </div>

              <div class="hidden w-48 ml-4 relative flex items-center ">
                    <input wire:model="filters.search" type="search" placeholder="Search..." class="w-full text-base border-2 border-gray-300 rounded shadow px-3 pl-8 py-1 focus:outline-none focus:ring-green-500 focus:border-green-500">
                    <div class="absolute inset-y-0 left-0 pl-2 pt-3">
                        <x-zondicon-search class="text-gray-400  w-6 h-4 " />
                    </div>
                </div>
  </div>

  <div class="flex items-center space-x-4">
    <div class=" "> 
    <button @click="open = !open" class=" bg-gray-400  rounded shadow py-2 px-3 text-white font-bold">     <x-zondicon-tuning class="text-white w-4 h-4 text-gray-400 transform rotate-90" />    
     </button>                       
    </div>

    <div class="w-24 ">                               
    <select wire:model="filters.paginate" id="line" class="w-full form-select text-base border-2 border-gray-300 rounded shadow px-3 py-1 focus:outline-none focus:ring-green-500 focus:border-green-500 ">
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
    </select>                         
    </div>
  </div>

</div>

<!-- dodatni filteri -->   
<div x-show.transition.opacity="open" class="tapeta p-2 bg-gray-200 rounded shadow mt-2 flex justify-between ">

  <div class="flex items-center space-x-4">
   <label class="w-64 block flex items-center space-x-2">
                <span>From</span>
                <input  wire:model.lazy="filters.date-min" type="date" class=" py-1 mt-1 block w-full">
    </label>
<label class="w-64 block flex items-center space-x-2">
                <span>To</span>
                <input wire:model.lazy="filters.date-max" type="date" class=" py-1 mt-1 block w-full">
    </label>
   

             
  </div>

  <div class="flex items-center space-x-4">
    <div class=" "> 
    <button  class=" bg-green-500 h rounded shadow py-2 px-3 text-white font-bold">     
      <x-zondicon-travel-bus class="text-white w-4 h-4 " />    
     </button>                       
    </div>

  </div>

</div>





</div>




<div class="tabel flex justify-center w-full  mt-2">      

    <div class="w-full flex-col space-y-4">

        <table class="min-w-full divide-y divide-gray-300 border-1 border-gray-400 rounded shadow">
          <thead class="bg-gray-200 ">
            <tr>

              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600  tracking-wider">
                
                <input wire:model="selectedPage" type="checkbox" class="form-checkbox text-green-500 focus:outline-none">
              
              </th>

              <x-tablesorting :sortField="$sortField" :sortDirection="$sortDirection" sort="start_day" title="Departue" />
              <x-tablesorting :sortField="$sortField" :sortDirection="$sortDirection" sort="end_day" title="Arrival" />

              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600  tracking-wider">
               Line
              </th>

              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600  tracking-wider">
               Amount
              </th>

              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600  tracking-wider">
               Sale
              </th>

              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600  tracking-wider">
                <div class="flex justify-center">
               Live
           </div>
              </th>

            </tr>
          </thead>
          <tbody class="bg-white bg-opacity-75 divide-y divide-gray-200">
@forelse($timetables as $timetable)
            <tr class="hover:bg-orange-50">
              
              <td class="w-1/12 px-6 py-3 whitespace-nowrap ">
                
                 <input wire:model="selected" value="{{ $timetable->id }}"
                 type="checkbox" class="form-checkbox text-green-500 focus:outline-none">
                
              </td>

              <td class="w-2/12 px-6 py-3 whitespace-nowrap">
                <p class="truncate text-sm text-gray-800">{{ $timetable->start_day->format('d M Y') }}</p>
                <p class="truncate text-sm text-gray-500">14:00</p>
              </td>


              <td class="w-2/12 px-6 py-3 whitespace-nowrap">
                <p class="truncate text-sm text-gray-800">{{ $timetable->end_day }}</p>
                <p class="truncate text-sm text-gray-500">16:00</p>
              </td>

              <td class="w-3/12 px-6 py-3 whitespace-nowrap">
                <p class="truncate text-sm text-gray-800">{{ $timetable->line->name }}</p>
              </td>

              <td class="w-1/12 px-6 py-3 whitespace-nowrap">
                <p class="pl-1 truncate text-sm text-gray-800">{{ $timetable->amount }}</p>
              </td>

              <td class="w-1/12 px-6 py-3 whitespace-nowrap">
                <p class="pl-1 truncate text-sm text-gray-800">5</p>
              </td>


              <td class="w-2/12 px-6 py-3 whitespace-nowrap ">
                
                <div class="flex justify-center">
                 @if($timetable->live)   
               <span class="animate-ping flex  h-2 w-2">
                  <span class="inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
              </span>
                 @elseif(!$timetable->live)
                 <span class=" flex  h-2 w-2">
                  <span class="   inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
              </span>
                 @endif
                </div>

              </td>


            </tr>
@empty
            <tr class="" >
              
              <td class=" text-center w-12/12 px-6 py-3 whitespace-nowrap" colspan="7">
                <p class="truncate text-lg text-gray-700">No timetable 
                <a href="#" class="text-green-500 underline">select</a>
              stations...</p>
              </td>

            </tr>

@endforelse



        

          </tbody>
        </table>
<div>
    {{ $timetables->links() }}
</div>
    </div>


</div>







</div>