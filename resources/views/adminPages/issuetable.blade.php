@extends('components.admin-layout')
@section('content')

<section class="bg-gray-50 dark:bg-gray-900">
    <div class="mx-auto max-w-screen-xl">
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div
                class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-1/2">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search </label>
                        <div class="relative w-full">
                            <div
                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Search Issue" required="">
                        </div>
                    </form>
                </div>
                <div
                    class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

<!-- Modal toggle -->
<button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:gray:bg-blue-700 dark:focus:ring-gray-800" type="button">
    + ADD ISSUE
  </button>

  <!-- Main modal -->
  <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-md max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Close modal</span>
              </button>
              <div class="px-6 py-6 lg:px-8">
                  <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Issue Add</h3>
                  <form class="space-y-6" action="#">
                      <div>
                          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Issue No.</label>
                          <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="eg.1" required>
                      </div>
                      <div>
                          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Issue Type</label>
                          <input type="text" name="password" id="password" placeholder="eg.2012" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                      </div>

                      <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SAVE</button>

                  </form>
              </div>
          </div>
      </div>
  </div>

                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-xs text-gray-700 uppercase bg-sky-300 dark:bg-amber-50 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">Issue No</th>
                            <th scope="col" class="px-4 py-3">Issue Type</th>
                            <th scope="col" class="pr-8">Actions</th>
                           </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>


                            <td class="px-6 py-4 space-x-4">
                                <a href="#" class="font-medium text-green-600 dark:text-green-500 pl-4 ">Show</a>
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 ">Edit</a>
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 ">Delete</a>


                            </td>
                        </tr>
                        <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Microsoft Surface Pro
                            </th>
                            <td class="px-6 py-4">
                                White
                            </td>

                            <td class="px-6 py-4 space-x-4">
                                <a href="#" class="font-medium text-green-600 dark:text-green-500 pl-4 ">Show</a>
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 ">Edit</a>
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 ">Delete</a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Magic Mouse 2
                            </th>
                            <td class="px-6 py-4">
                                Black
                            </td>

                            <td class="px-6 py-4 space-x-4">
                                <a href="#" class="font-medium text-green-600 dark:text-green-500 pl-4 ">Show</a>
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 ">Edit</a>
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 ">Delete</a>
                            </td>
                        </tr>
                        <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Google Pixel Phone
                            </th>
                            <td class="px-6 py-4">
                                Gray
                            </td>

                            <td class="px-6 py-4 space-x-4">
                                <a href="#" class="font-medium text-green-600 dark:text-green-500 pl-4 ">Show</a>
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 ">Edit</a>
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 ">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple Watch 5
                            </th>
                            <td class="px-6 py-4">
                                Red
                            </td>

                            <td class="px-6 py-4 space-x-4">
                                <a href="#" class="font-medium text-green-600 dark:text-green-500 pl-4 ">Show</a>
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 ">Edit</a>
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 ">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
@endsection()
