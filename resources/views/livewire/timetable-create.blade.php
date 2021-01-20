<div>

    <!-- session success message --> 
        @if (session('timetable_created'))
        <div class="py-2 px-4 mt-2 flex justify-between items-center mx-8 lg:mx-16 xl:mx-32 2xl:mx-64 bg-green-500 font-semibold bg-opacity-75 text-white rounded shadow">
            <div class="flex items-center space-x-4">
                <x-zondicon-checkmark-outline class="w-4 h-4" />
                <p>{{ session('timetable_created') }}</p>
            </div>
            <button>x</button>
        </div>
        @endif
       


        <div class=" mt-2 flex flex-col mx-8 lg:mx-16 xl:mx-32 2xl:mx-64 bg-white bg-opacity-75  border-1 border-gray-400 rounded shadow">

            
                        
          <form wire:submit.prevent="addTimetable">

            <!-- card -->
            <div class=" px-6 pt-8 pb-4 ">

                <!-- flex-->
                <div class="w-full flex flex-col lg:flex-row">

                    <!-- left dteails -->
                    <div class="w-full lg:w-1/3 pr-4">
                        <h3 class="text-lg mb-4">Create Timetable</h3>
                            <p class="text-sm text-gray-800 leading-normal mb-4">
                                Select line, choose day scheduale, period and amount of available
                                tickets.
                            </p>
                    </div>

                    <!-- right form -->                        
                    <div class="w-full lg:w-2/3 lg:pl-8 ">
                        <div class="flex flex-wrap">

                        	<div class="w-full mb-6">
                                <label for="line" class="block text-sm mb-2 text-gray-800 ">Select Line</label>
                                <select wire:model.lazy="line" id="line" class="form-select w-full text-base border-2 border-gray-300 @error('line') border-red-400 @enderror rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500 ">
                                		<option value=""></option>
                                	@foreach (App\Models\Line::all() as $line)
                                        <option value="{{ $line->id }}">{{ $line->name }}</option>
                                    @endforeach
                               	</select>
                               	@error('line')
                                	<p class="text-red-400">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="w-full flex flex-col space-y-2 mb-6">

                            <div class="w-1/7 ">
                                <label for="monday" class="flex items-center block text-sm mb-2 text-gray-800 ">
                                <input wire:model="days" value="1" type="checkbox" id="monday" class="form-checkbox">
                            	<span class="ml-2">Monday</span>                     
                               	</label>
                               	
                            </div>

                            <div class="w-1/7 ">
                                <label for="tuesday" class="flex items-center block text-sm mb-2 text-gray-800 ">
                                <input wire:model="days" value="2" type="checkbox" id="tuesday" class="form-checkbox">
                            	<span class="ml-2">Tuesday</span>                     
                               	</label>
                               	
                            </div>

                            <div class="w-1/7  ">
                                <label for="wednesday" class="flex items-center block text-sm mb-2 text-gray-800 ">
                                <input wire:model="days" value="3" type="checkbox" id="wednesday" class="form-checkbox">
                            	<span class="ml-2">Wednesday</span>                     
                               	</label>
                               	
                            </div>

                            <div class="w-1/7 mb-6 ">
                                <label for="thursday" class="flex items-center block text-sm mb-2 text-gray-800 ">
                                <input wire:model="days" value="4" type="checkbox" id="thursday" class="form-checkbox">
                            	<span class="ml-2">Thursday</span>                     
                               	</label>
                            </div>

                            <div class="w-1/7  ">
                                <label for="friday" class="flex items-center block text-sm mb-2 text-gray-800 ">
                                <input wire:model="days" value="5" type="checkbox" id="friday" class="form-checkbox">
                            	<span class="ml-2">Friday</span>                     
                               	</label>
                               
                            </div>

                            <div class="w-1/7  ">
                                <label for="saturday" class="flex items-center block text-sm mb-2 text-gray-800 ">
                                <input wire:model="days" value="6" type="checkbox" id="saturday" class="form-checkbox">
                            	<span class="ml-2">Saturday</span>                     
                               	</label>
                               	
                            </div>

                            <div class="w-1/7 ">
                                <label for="sunday" class="flex items-center block text-sm mb-2 text-gray-800 ">
                                <input wire:model="days" value="7" type="checkbox" id="sunday" class="form-checkbox">
                            	<span class="ml-2">Sunday</span>                     
                               	</label>
                            </div>

                                @error('days')
                                    <p class="text-red-400">{{ $message }}</p> 
                                @enderror

                        	</div>
                            
                            <div class="w-1/2 mb-6 pr-4">
                                <label for="period" class="block text-sm mb-2 text-gray-800 ">For Period</label>
                                <select wire:model.lazy="period" id="period" class="form-select w-full text-base border-2 border-gray-300 @error('period') border-red-400 @enderror rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500 ">
                                		<option value=""></option>
                                	@foreach (App\Models\Timetable::PERIOD as $value => $period)
                                        <option value="{{ $value }}">{{ $period }}</option>
                                    @endforeach
                               	</select>
                               	@error('period')
                                	<p class="text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="w-1/2 mb-6 pr-4">
                                <label for="amount" class="block text-sm mb-2 text-gray-800 ">Tickets Amount</label>
                                <select wire:model.lazy="amount" id="amount" class="form-select w-full text-base border-2 border-gray-300 @error('amount') border-red-400 @enderror rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500 ">
                                        
                                    @for ($i = 1; $i < 66; $i++) 
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor

                                </select>
                                @error('amount')
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


</div>
