<div class="flex items-center md:mr-32">
                    <div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
                        <div @click="open = ! open">
                            <button class="flex items-center focus:outline-none transition duration-150 ease-in-out">
                                <div>Ivan Radojevic</div>

                                <div class="ml-1">
                                    
                                    <x-zondicon-cheveron-down class="w-4 h-4"/>

                                </div>
                            </button>
                        </div>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 mt-2 w-48 rounded-md shadow-lg origin-top-right right-0" style="display: none;" @click="open = false">
                            <div class="rounded-md shadow-xs py-1 bg-gray-600">
                                <!-- Account Management -->
                                <a class="block px-4 py-2 leading-5 transition duration-150 ease-in-out hover:text-white" href="http://ladoga.test">App</a>
                                <a class="block px-4 py-2 leading-5 transition duration-150 ease-in-out hover:text-white" href="http://ladoga.test/user/profile">Profile</a>
                                <div class="border-t border-gray-300"></div>
                                <!-- Team Management -->
                                <!-- Authentication -->
                                <form method="POST" action="http://ladoga.test/logout">
                                    <input type="hidden" name="_token" value="o00CLyanxnQV9JNui32AMsnfiMgHgQOWwlN32o1h">
                                    <a class="block px-4 py-2 leading-5 transition duration-150 ease-in-out hover:text-white"
                                        href="http://ladoga.test/logout" onclick="event.preventDefault();
                                        this.closest('form').submit();">Logout</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>