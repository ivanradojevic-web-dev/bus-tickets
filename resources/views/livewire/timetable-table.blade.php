<div class="flex flex-col space-y-4 mx-4 lg:mx-8 xl:mx-16 2xl:mx-32">

<div class="px-4 gornji">

	<div class="w-1/4 ">                               
    <select wire:model="line" id="line" class="w-full form-select text-base border-2 border-gray-300 rounded shadow px-3 py-1 focus:outline-none focus:ring-green-500 focus:border-green-500 ">
    	<option value="">All Lines</option>
    @foreach (App\Models\Line::all() as $line)
    	<option value="{{ $line->id }}">{{ $line->name }}</option>
    @endforeach
    </select>                         
    </div>

</div>




<div class="tabel flex justify-center w-full  mt-2">      

    <div class="w-full flex-col space-y-4">

        <table class="min-w-full divide-y divide-gray-300 border-1 border-gray-400 rounded shadow">
          <thead class="bg-gray-200 ">
            <tr>

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

              <th scope="col" class="relative px-6 py-4">
                <span class="sr-only">Edit</span>
              </th>

            </tr>
          </thead>
          <tbody class="bg-white bg-opacity-75 divide-y divide-gray-200">
@forelse($timetables as $timetable)
            <tr class="hover:bg-orange-50">
              
              <td class="w-3/12 px-6 py-3 whitespace-nowrap">
                <p class="truncate text-sm text-gray-800">{{ $timetable->start_day->format('d M Y') }}</p>
                <p class="truncate text-sm text-gray-500">14:00</p>
              </td>



              <td class="w-3/12 px-6 py-3 whitespace-nowrap">
                <p class="truncate text-sm text-gray-800">{{ $timetable->end_day }}</p>
                <p class="truncate text-sm text-gray-500">16:00</p>
              </td>

              <td class="w-2/12 px-6 py-3 whitespace-nowrap">
                <p class="truncate text-sm text-gray-800">{{ $timetable->line->name }}</p>
              </td>

              <td class="w-1/12 px-6 py-3 whitespace-nowrap">
                <p class="truncate text-sm text-gray-800">{{ $timetable->amount }}</p>
              </td>

              <td class="w-1/12 px-6 py-3 whitespace-nowrap">
                <p class="truncate text-sm text-gray-800">5</p>
              </td>


              <td class="w-2/12 px-6 py-3 whitespace-nowrap text-right text-sm font-medium ">
                
              </td>
            </tr>
@empty
            <tr class="" >
              
              <td class=" text-center w-12/12 px-6 py-3 whitespace-nowrap" colspan="4">
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