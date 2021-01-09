
        <div class="mt-2 flex flex-col mx-8 lg:mx-16 xl:mx-32 2xl:mx-64 bg-white bg-opacity-75  border-1 border-gray-400 rounded shadow">
                        
          <form wire:submit.prevent="addStation">

            <!-- card -->
            <div class="px-6 pt-8 pb-4 ">

                <!-- flex-->
                <div class="flex flex-col lg:flex-row">

                    <!-- left dteails -->
                    <div class="w-full lg:w-1/3 pr-4">
                        <h3 class="text-lg mb-4">Create New Station</h3>
                            <p class="text-sm text-gray-800 leading-normal mb-4">
                                Insert the name of a bus station and select country from the list.
                            </p>
                    </div>

                    <!-- right form -->                        
                    <div class="w-full lg:w-2/3 lg:pl-8 ">
                        <div class="flex flex-wrap">
                            
                            <div class="w-full mb-6">
                                <label for="name" class="block text-sm mb-2 text-gray-800 ">Insert Name</label>
                                <input wire:model.lazy="name" id="name" type="text" value="" class="w-full text-base border-2 border-gray-300
                                @error('name') border-red-400 @enderror rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500">
                                @error('name')
                                	<p class="text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full mb-6">
                                <label for="country" class="block text-sm mb-2 text-gray-800 ">Select Country</label>
                                <select wire:model.lazy="country" id="country" class="w-full text-base border-2 border-gray-300 @error('country') border-red-400 @enderror rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500 ">
                                		<option value=""></option>
                                	@foreach (App\Models\Station::COUNTRIES as $value)
                                        <option value="{{ $value }}">{{ $value }}</option>
                                    @endforeach
                               	</select>
                               	@error('country')
                                	<p class="text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            
                        </div>
                    </div>   
                </div>
                       
            </div> <!-- end card-details -->

            <div class="flex justify-end items-center bg-gray-200 space-x-8 py-2 px-6 ">
                <a href="#" class="font-bold text-gray-600 tracking-wider">Cancel</a>
                <button type="submit" class="w-24 bg-green-500 rounded shadow py-2 px-3 text-white font-bold">Save</button>
            </div>  

          </form>

        </div>  
