      <div class="hidden md:block flex-none w-64 bg-gray-700 text-gray-300 text-sm font-semibold">
                

                <div class="h-full flex flex-col justify-between">

                    <div class="sidebar-spotify overflow-y-auto shadow">

                    <ul class="pt-4">
                        <li class="{{ request()->routeIs('admiral') ? 'border-l-4 border-orange-500 text-white' : '' }}">
                            <a href="{{ route('admiral') }}" class="hover:text-white flex items-center ml-4 mt-4 ">
                                <x-zondicon-dashboard class="w-4 h-4 " />
                                <span class="ml-2 " >Dashboard</span>
                            </a>   
                        </li>
                        <li class="{{ request()->routeIs('form') ? 'border-l-4 border-orange-500 text-white' : '' }}">
                            <a href="{{ route('form') }}" class="hover:text-white flex items-center ml-4 mt-4">
                                <x-zondicon-compose class="w-4 h-4 " />
                                <span class="ml-2 " >Form</span>
                            </a>     
                        </li>
                        <li class="{{ request()->routeIs('table') ? 'border-l-4 border-orange-500 text-white' : '' }}">
                            <a href="{{ route('table') }}" class="hover:text-white flex items-center ml-4 mt-4">
                                <x-zondicon-view-column class="w-4 h-4 " />
                                <span class="ml-2 " >Table</span>
                            </a>     
                        </li>
                    </ul>  

                    <ul class="pt-4">
                        <li class="uppercase tracking-widest font-normal text-xs ml-4 mt-4">
                            Headline with icons
                        </li>
                        <li class="{{ request()->routeIs('admiral-stations.index') ? 'border-l-4 border-orange-500 text-white' : '' }}">
                            <a href="{{ route('admiral-stations.index') }}" class="hover:text-white flex items-center ml-4 mt-4">
                                <x-zondicon-map class="w-4 h-4 " />
                                <span class="ml-2">Stations</span>
                            </a>     
                        </li>
                        <li class="">
                            <a href="#" class="hover:text-white flex items-center ml-4 mt-4">
                                <x-zondicon-view-column class="w-4 h-4 " />
                                <span class="ml-2 " >Table</span>
                            </a>     
                        </li>
                        <li class="">
                            <a href="#" class="hover:text-white flex items-center ml-4 mt-4">
                                <x-zondicon-compose class="w-4 h-4 " />
                                <span class="ml-2 " >Form</span>
                            </a>     
                        </li>
                    </ul>  

                    <ul class="pt-4">
                        <li class="uppercase tracking-widest font-normal text-xs mx-4 mt-4">
                            Headline without icons
                        </li>
                       
                        <li class="">
                            <a href="#" class="flex items-center ml-4 mt-4">
                                
                                <span class="" >Form</span>
                            </a>     
                        </li>     
                        
                        <li class="">
                            <a href="#" class="flex items-center ml-4 mt-4">
                                
                                <span class="" >Table</span>
                            </a>     
                        </li>
                        <li class="">
                            <a href="#" class="flex items-center ml-4 mt-4">
                              
                                <span class="" >Form</span>
                            </a>     
                        </li>
                    </ul>

                    <ul class="pt-4">
                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                    </ul>

                    </div>

                    

                </div>
            </div>