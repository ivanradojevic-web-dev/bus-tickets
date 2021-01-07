@extends('admiral')

@section('content')

       <div class=" w-full flex flex-col">

                
                    <!-- overflow -->
                    <div class="content-spotify overflow-y-auto py-8 ">

                        <!-- breadcrumb -->
                        <div class=" p-4 mx-4 lg:mx-18 xl:mx-16 2xl:mx-32 ">
                            <ul class="flex text-gray-800 ">
                                <li><a href="{{ url('/admiral') }}" class="font-semibold">Home</a></li>
                                <li><span class="mx-2">/</span></li>
                                <li>Table</li>
                            </ul>
                        </div>  

                        <!-- white area 
                        <div class="mt-2 flex flex-col mx-72 bg-white bg-opacity-75  border-1 border-gray-400 rounded shadow"> -->
      <div class="  flex justify-center            mx-4 lg:mx-18 xl:mx-16 2xl:mx-32               mt-2">            

<div class="w-full flex-col space-y-4">

                        

        <table class="min-w-full divide-y divide-gray-300 border-1 border-gray-400 rounded shadow">
          <thead class="bg-gray-200 ">
            <tr>
              <th scope="col" class="flex items-center space-x-2 px-6 py-3 text-left  font-semi-bold text-gray-600 tracking-wider">
                Nameorigin
              </th>
              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600  tracking-wider">
                Title
              </th>
              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600  tracking-wider">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left  font-semi-bold text-gray-600  tracking-wider">
                Country
              </th>
              <th scope="col" class="relative px-6 py-4">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white bg-opacity-75 divide-y divide-gray-200">
@foreach ($stations as $station)
            <tr class="hover:bg-orange-50">
              <td class="px-6 py-3 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="">
                    <input type="checkbox" class="form-checkbox text-green-500">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      Jane Cooper
                    </div>
                    <div class="text-sm text-gray-500">
                      jane.cooper@example.com
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-3 whitespace-nowrap">
                <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                <div class="text-sm text-gray-500">Optimization</div>
              </td>
              <td class="px-6 py-3 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                  {{ $station->name }}
                </span>
              </td>
              <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-500">
                {{ $station->country }}
              </td>
              <td class="px-6 py-3 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-green-600 hover:text-green-900">Edit</a>
              </td>
            </tr>
@endforeach          

            <!-- More rows... -->
          </tbody>
        </table>




 </div>
</div>

                    </div>

                </div>

@endsection                