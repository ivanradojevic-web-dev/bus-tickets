<div class="flex justify-center mx-4 lg:mx-8 xl:mx-16 2xl:mx-32  mt-2">      

    <div class="w-full flex-col space-y-4">

        <table class="min-w-full divide-y divide-gray-300 border-1 border-gray-400 rounded shadow">
          <thead class="bg-gray-200 ">
            <tr>

              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600 tracking-wider">
              	Order 
              </th>

              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600  tracking-wider">
               Station
              </th>

              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600  tracking-wider">
               Price From Starting Station
              </th>

              <th scope="col" class="relative px-6 py-4">
                <span class="sr-only">Edit</span>
              </th>

            </tr>
          </thead>
          <tbody class="bg-white bg-opacity-75 divide-y divide-gray-200">
@forelse ($stations as $station)
            <tr class="hover:bg-orange-50">
              
              <td class="w-2/12 px-6 py-3 whitespace-nowrap">
                <p class="truncate text-sm text-gray-800">{{ $station->pivot->order }}</p>
              </td>

              <td class="w-4/12 px-6 py-3 whitespace-nowrap">
                <p class="truncate text-sm text-gray-800">{{ Str::limit($station->name, 24) }}</p>
              </td>

              <td class="w-4/12 px-6 py-3 whitespace-nowrap">
                <p class="truncate text-sm text-gray-800">{{ $station->pivot->price }}</p>
              </td>

              <td class="w-2/12 px-6 py-3 whitespace-nowrap text-right text-sm font-medium ">
                
              </td>
            </tr>
@empty
            <tr class="" >
              
              <td class=" text-center w-12/12 px-6 py-3 whitespace-nowrap" colspan="4">
                <p class="truncate text-lg text-gray-700">No stations yet. Please 
                <a href="{{ route('admiral-lines.select', $line->id) }}" class="text-green-500 underline">select</a>
              stations...</p>
              </td>

            </tr>


@endforelse          

          </tbody>
        </table>

    </div>


</div>



