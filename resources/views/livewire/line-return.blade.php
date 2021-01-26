<div>

    
        


        <div class=" mt-2 flex flex-col mx-8 lg:mx-16 xl:mx-32 2xl:mx-64 bg-white bg-opacity-75  border-1 border-gray-400 rounded shadow">

            
                        
          <form wire:submit.prevent="addReturnLine">

            <!-- card -->
            <div class=" px-6 pt-8 pb-4 ">

                <!-- flex-->
                <div class="w-full flex flex-col lg:flex-row">

                    <!-- left dteails -->
                    <div class="w-full lg:w-1/3 pr-4">
                        <h3 class="text-lg mb-4">Create Return Line</h3>
                            <p class="text-sm text-gray-800 leading-normal mb-4">
                                Create return line. Return line 
                            </p>
                    </div>

                    <!-- right form -->                        
                    <div class="w-full lg:w-2/3 lg:pl-8 ">
                        <div class="flex flex-wrap">
                            
                            <div class="w-full mb-6">
                                <label for="name" class="block text-sm mb-2 text-gray-800 ">
                                	Do you want to creater return line for route  {{$line->name}}     ?
                                </label>
                                
                            </div>
                                      
                        </div>
                    </div>   
                </div>
                       
            </div> <!-- end card-details -->

            <div class="flex justify-end items-center bg-gray-200 space-x-8 py-2 px-6 ">
                <a href="#" class="font-bold text-gray-600 tracking-wider">No</a>
                <button type="submit" class="w-24 bg-green-500 rounded shadow py-2 px-3 text-white font-bold">Yes</button>
            </div>  

          </form>

        </div>  


</div>