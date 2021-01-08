@extends('admiral')

@section('content')
<div class="flex flex-col">

    <!-- overflow -->
    <div class="content-spotify overflow-y-auto py-8 ">

        <!-- breadcrumb -->
        <div class=" p-4 mx-8 lg:mx-16 xl:mx-32 2xl:mx-64">
            <ul class="flex text-gray-800 ">
                <li><a href="{{ url('/admiral') }}" class="font-semibold">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="{{ route('admiral-stations.index') }}" class="font-semibold">Stations</a></li>
                <li><span class="mx-2">/</span></li>
                <li>Create</li>
            </ul>
        </div>        

        <!-- backbutton -->
                        <div class="flex  mb-4 px-4 mx-8 lg:mx-16 xl:mx-32 2xl:mx-64  ">
                            <a href="{{ route('admiral-stations.index') }}">
                                <button class="w-24 bg-red-300  rounded shadow py-2 px-3 text-white font-bold">
                                    Back
                                </button>
                            </a>
                        </div>           

        <!-- white area -->
        <div class="mt-2 flex flex-col mx-8 lg:mx-16 xl:mx-32 2xl:mx-64 bg-white bg-opacity-75  border-1 border-gray-400 rounded shadow">
                            
            <!-- card -->
            <div class="px-6 pt-8 pb-4 ">

                <!-- flex-->
                <div class="flex flex-col lg:flex-row">

                    <!-- left dteails -->
                    <div class="w-full lg:w-1/3 pr-4">
                        <h3 class="text-lg mb-4">Detail</h3>
                            <p class="text-sm text-gray-800 leading-normal mb-4">
                                Information about this property only. Owner Name, Protest Address, and CAD Mailing Address must match the county's records.
                            </p>

                            <p class=" text-sm text-gray-800 leading-normal mb-4">
                                If you need to update the contact, you may do so on the contact page for <a href="#">Bart Simpson</a>.
                            </p>
                    </div>

                    <!-- right form -->                        
                    <div class="w-full lg:w-2/3 lg:pl-8 ">
                        <div class="flex flex-wrap">
                            <div class="w-1/2 pr-4 mb-6">
                                <label for="pid" class="block text-sm mb-2 text-gray-800 ">PID</label>
                                <input id="pid" type="text" value="" class="w-full text-base border-2 border-gray-300      rounded px-3 py-2 focus:outline-none focus:ring-green-400 focus:border-green-400">
                            </div>
                            <div class="w-1/2">
                                <label for="cad_owner_name" class="block text-sm mb-2 text-gray-800 ">CAD Owner Name</label>
                                <input id="cad_ownder_name" type="text" value="Bart Simpson" class="w-full text-base border-2 border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-green-400 focus:border-green-400">
                            </div>
                            <div class="w-full mb-6">
                                <label for="protest_address" class="block text-sm mb-2 text-gray-800 ">Protest Address</label>
                                <input id="protest_address" type="text" value="123 Main St., Galveston, TX 77555" class="w-full text-base border-2 border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500 ">
                            </div>
                            <div class="w-full mb-6">
                                <label for="cad_mailing_address" class="block text-sm mb-2 text-gray-800 ">CAD Mailing Address</label>
                                <input id="cad_mailing_address" type="text" value="123 Fake St., Galveston, TX 77555" class="w-full text-base border-2 border-red-400 rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500">
                                <p class="text-red-400">This is an error message</p>
                            </div>
                            <div class="w-1/3 lg:mb-6">
                                <label for="fee_rate" class="block text-sm mb-2 text-gray-800 ">Fee Rate</label>
                                <input id="fee_rate" type="text" value="40" class="w-full text-base border-2 border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500">
                            </div>
                            <div class="w-1/3 mb-6 pl-4">
                                <label for="start_year" class="block text-sm mb-2 text-gray-800 ">Start Year</label>
                                <input id="start_year" type="text" value="2018" class="w-full text-base border-2 border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500">
                            </div>
                            <div class="w-1/3 mb-6 pl-4">
                                <label for="agency_end_date" class="block text-sm mb-2 text-gray-800 ">Agency  Date</label>
                                <input id="agency_end_date" type="text" class="w-full text-base border-2 border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500">
                            </div>
                        </div>
                    </div>   
                </div>
                       
            </div> <!-- end card-details -->

            <div class="flex justify-end items-center bg-gray-200 space-x-8 py-2 px-6 ">
                <a href="#" class="font-bold text-gray-600 tracking-wider">Cancel</a>
                <button class="w-24 bg-green-500 rounded shadow py-2 px-3 text-white font-bold">Save</button>
            </div>  


        </div>                

    </div>

</div>
@endsection                