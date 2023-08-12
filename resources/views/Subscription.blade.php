@extends('layouts.layout')
@push('title')
    <title>Subscription</title>
@endpush

@section('content')
    <!-- Subscription -->

    <div
        class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
        <div>
            <div class="About block md:h-1/3 w-full md:w-2/3">
                <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500">
                    Subscription
                </h1>
                <p class="text-justify pt-4">
                    The journal can be subscribed in the following category:
                </p>
            </div>
            <div>
                <!-- <table class="flex flex-row justify-between items-center">
              <tr>
                  <th>Period</th>
                  <th>Amount</th>
                  <th>Discount</th>
                  <th>Payable</th>
              </tr>
              <tr>
                  <td>One Year (2 issue)</td>
                  <td>Rs.1000/-</td>
                  <td>NIL</td>
                  <td>Rs.1000/-</td>
              </tr>
              <tr>
                  <td>Three Year (6 Issue)</td>
                  <td>Rs.3000/-</td>
                  <td>20%</td>
                  <td>Rs.2400/-</td>
              </tr>
              <tr>
                  <td>Six Year (10 Issue)</td>
                  <td>Rs.5000/-</td>
                  <td>30%</td>
                  <td>Rs3500/-</td>
              </tr>
            </table> -->

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Period</th>
                                <th scope="col" class="px-6 py-3">Amount</th>
                                <th scope="col" class="px-6 py-3">Discount</th>
                                <th scope="col" class="px-6 py-3">Payable</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    One Year (2 issue)
                                </th>
                                <td class="px-6 py-4">Rs.1000/-</td>
                                <td class="px-6 py-4">NIL</td>
                                <td class="px-6 py-4">Rs.1000/-</td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Three Year (6 Issue)
                                </th>
                                <td class="px-6 py-4">Rs.3000/-</td>
                                <td class="px-6 py-4">20%</td>
                                <td class="px-6 py-4">Rs.2400/-</td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Six Year (10 Issue)
                                </th>
                                <td class="px-6 py-4">Rs.5000/-</td>
                                <td class="px-6 py-4">30%</td>
                                <td class="px-6 py-4">Rs3500/-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @component('components.links')
        @endcomponent
    </div>
@endsection
