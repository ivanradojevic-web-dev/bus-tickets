<div>

        <!-- line success message -->
        @if (session('line-saved'))
        <div class="py-2 px-4 mt-2 flex justify-between items-center mx-8 lg:mx-16 xl:mx-32 2xl:mx-64 bg-green-500 font-semibold bg-opacity-75 text-white rounded shadow">
            <div class="flex items-center space-x-4">
                <x-zondicon-checkmark-outline class="w-4 h-4" />
                <p>{{ session('line-saved') }}</p>
            </div>
            <button>x</button>
        </div>
        @endif
 


        <div class=" mt-2 flex flex-col mx-8 lg:mx-16 xl:mx-32 2xl:mx-64 bg-white bg-opacity-75  border-1 border-gray-400 rounded shadow">

            
          @if($line->stations()->count() == 0)              
          <form wire:submit.prevent="selectStations">

            <!-- card -->
            <div class=" px-6 pt-8 pb-4 ">

                <!-- flex-->
                <div class="w-full flex flex-col lg:flex-row">

                    <!-- left dteails -->
                    <div class="w-full lg:w-1/3 pr-4">
                        <h3 class="text-lg mb-4">Select Stations</h3>
                            <p class="text-sm text-gray-800 leading-normal mb-4">
                                Select all stations for the line...
                            </p>
                    </div>

                    <!-- right form -->                        
                    <div class="w-full lg:w-2/3 lg:pl-8 ">
                        <div class="flex flex-wrap">
                            

                               <div class="w-full mb-6">
                                <label for="selected" class="block text-sm mb-2 text-gray-800 ">Select Stations</label>
                                <select wire:model.lazy="selected" multiple id="selected" class="w-full text-base border-2 border-gray-300 @error('selected') border-red-400 @enderror rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500 ">
                                  @foreach ($stations as $station)
                                    <option value="{{ $station->name }}">{{ $station->name }}</option>
                                   @endforeach
                                </select>
                                @error('selected')
                                  <p class="text-red-400">{{ $message }}</p>
                                @enderror
                              </div>

                              <div class="w-full mb-6">
                                <ul class="flex flex-wrap">
                                    @foreach ($selected as $key => $select)
                                    <li class="flex items-center space-x-1 mr-2 text-gray-600 text-sm tracking-wide">
                                        <x-zondicon-location class="w-4 h-4 " />
                                        <span>{{ $select}}</span>
                                    </li>
                                    @endforeach     
                                </ul> 
                              </div>


                   
                          </div>                                      
                     </div>
</div>

                       
            </div> <!-- end card-details -->

            <div class="flex justify-end items-center bg-gray-200 space-x-8 py-2 px-6 ">
                <a href="#" class="font-bold text-gray-600 tracking-wider">Cancel</a>
                <button type="submit" class="w-24 bg-green-500 rounded shadow py-2 px-3 text-white font-bold">Next</button>
            </div>  

          </form>
          @else
          <div class=" px-6 pt-8 pb-4 ">
                <div class="w-full mb-6">
                                <ul class="flex flex-wrap">
                                    @foreach ($line->stations as  $select)
                                    <li class="flex items-center space-x-1 mr-2 text-gray-600 text-sm tracking-wide">
                                        <x-zondicon-location class="w-4 h-4 " />
                                        <span>{{ $select->name }}</span>
                                    </li>
                                    @endforeach     
                                </ul> 
                </div>
          </div> 
          @endif

        </div>  


</div>

