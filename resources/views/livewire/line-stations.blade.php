<div class="flex justify-center mx-4 lg:mx-8 xl:mx-16 2xl:mx-32  mt-2">      

    <div class="w-full flex-col space-y-4">

        <table class="min-w-full divide-y divide-gray-300 border-1 border-gray-400 rounded shadow">
          <thead class="bg-gray-200 ">
            <tr>

              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600 tracking-wider">
              	jbhoihu 
              </th>

              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600  tracking-wider">
               hiuhph
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
                <p class="truncate text-sm text-gray-800">...</p>
              </td>

              <td class="w-2/12 px-6 py-3 whitespace-nowrap text-right text-sm font-medium ">
                <div class="flex justify-end items-center space-x-2">
                <a wire:click.prevent="edit( {{ $station->id }} )" href="#" >
                  <x-zondicon-edit-pencil class="w-4 h-4 text-green-300 hover:text-green-400" />
                </a>
                <a href="#" class="">
                  <x-zondicon-trash class="w-4 h-4 text-red-300 hover:text-red-400" />
                </a>
               </div>
              </td>
            </tr>
@endforeach          

          </tbody>
        </table>

    </div>


</div>



