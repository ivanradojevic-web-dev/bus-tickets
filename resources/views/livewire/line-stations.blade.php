<div class="flex justify-center mx-4 lg:mx-8 xl:mx-16 2xl:mx-32  mt-2">      

    <div class="w-full flex-col space-y-4">

        <table class="min-w-full divide-y divide-gray-300 border-1 border-gray-400 rounded shadow">
          <thead class="bg-gray-200 ">
            <tr>
  @if($stations->count() > 0)
              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600 tracking-wider">
              	Order 
              </th>

              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600  tracking-wider">
               Station
              </th>

              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600  tracking-wider">
             
               Price From {{$stations[0]->name}} (€)
                
              </th>

              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600  tracking-wider">
              
               Time From {{$stations[0]->name}}
                
              </th>
@endif
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


              <td class="w-3/12 px-6 py-3 whitespace-nowrap">
            <div x-data>
                @if($editingPriceId === $station->id)
                <input id="incremented" type="text" wire:model="price" class=" text-sm  w-16 h-4 block rounded  focus:outline-none  focus:ring-green-500 focus:border-green-500" x-on:click.away="$wire.updatePrice()"
                @keydown.enter="$wire.updatePrice()">
                @else
                <p x-on:dblclick="$wire.sendId({{ $station->id }})"
                    class="select-none pl-1 truncate text-sm text-gray-800">{{ $station->pivot->price }}
                </p>
                @endif
            </div>
              </td>


              <td class="w-3/12 px-6 py-3 whitespace-nowrap">
            <div x-data>
                @if($editingTimeId === $station->id)
                <input id="incremented" type="text" wire:model="time" class=" text-sm  w-16 h-4 block rounded focus:outline-none focus:ring-green-500 focus:border-green-500" x-on:click.away="$wire.updateTime()"
                @keydown.enter="$wire.updateTime()">
                @else
                <p x-on:dblclick="$wire.sindId({{ $station->id }})"
                    class="select-none pl-1 truncate text-sm text-gray-800">{{ $station->pivot->time }}
                </p>
                @endif
            </div>
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

<script>
    window.addEventListener('livewire:load', () => {
        @this.on('incremented', () => {
            document.getElementById('incremented').focus()
        })
    })
</script>



