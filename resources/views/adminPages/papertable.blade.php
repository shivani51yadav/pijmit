
@extends('components.admin-layout')
@section('content')


<section class="bg-gray-50 dark:bg-gray-900">
        <div class="mx-auto max-w-screen-xl">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                        <!-- Modal toggle -->
                        <!-- ... Your modal toggle button ... -->
                        <button data-modal-target="paperAdd-modal" data-modal-toggle="paperAdd-modal"
                            class="block text-white bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:gray:bg-blue-700 dark:focus:ring-gray-800"
                            type="button">
                            + ADD PAPER
                        </button>

                        <!-- Main modal -->
                        <!-- ... Your modal content ... -->
                        <div id="paperAdd-modal" tabindex="-1" aria-hidden="true"
                            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button"
                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="paperAdd-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8 ">

                                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">Add Paper</h3>
                                        <form class="space-y-6 grid grid-cols-2 gap-2" action="{{ route('papers.store') }} "
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="flex flex-col">
                                                <label for="select_volume"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                                    a Volume No.</label>
                                                <select id="vol_no" name="vol_no"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option value="" disabled>Select a Volume</option>
                                                    @foreach ($volumes as $volume)
                                                        <option value="{{ $volume->vol_no }}">Volume {{ $volume->vol_no }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="flex flex-col">
                                                <label for="select_issue"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                                    an Issue No.</label>
                                                <select id="issue_no" name="issue_no"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option value="" disabled>Select an Issue</option>
                                                    @foreach ($issues as $issue)
                                                        <option value="{{ $issue->issue_no }}">Issue {{ $issue->issue_no }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div>
                                                <label for="paper_no"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paper
                                                    No.</label>
                                                <input type="text" name="paper_no" id="paper_no" placeholder="eg.2"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>
                                            <div>
                                                <label for="paper_title"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paper
                                                    title</label>
                                                <input type="text" name="paper_title" id="paper_title"
                                                    placeholder="Paper title"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>
                                            <div>
                                                <label for="authors"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Authors</label>
                                                <input type="text" name="authors" id="authors" placeholder="authors "
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>
                                            <div>
                                                <label for="page_no"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Page
                                                    No.</label>
                                                <input type="text" name="page_no" id="page_no" placeholder="page no "
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>
                                            <div>
                                                <label for="created_by"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Created
                                                    By</label>
                                                <input type="text" name="created_by" id="created_by" placeholder="eg. 1"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>
                                            <div>
                                                <label for="modified_by"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Modified
                                                    By</label>
                                                <input type="text" name="modified_by" id="modified_by"
                                                    placeholder="eg. 2 "
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="pdf_file"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload
                                                    Paper</label>
                                                <input type="file" name="pdf_file" id="pdf_file" accept=".pdf"
                                                    class="border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500">
                                            </div>

                                            <div class="flex justify-end col-span-2 w-full">
                                                <button type="submit"
                                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SAVE</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-sky-300 dark:bg-amber-50 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">Volume No</th>
                                <th scope="col" class="px-4 py-3">Issue No</th>
                                <th scope="col" class="px-4 py-3">Paper No</th>
                                <th scope="col" class="px-4 py-3">Paper Title</th>
                                {{-- <th scope="col" class="px-4 py-3">Paper Name</th> --}}
                                {{-- <th scope="col" class="px-4 py-3">Start Page No</th> --}}
                                {{-- <th scope="col" class="px-4 py-3">End Page No</th> --}}
                                <th scope="col" class="px-4 py-3">Authors</th>
                                <th scope="col" class="px-4 py-3">Status</th>
                                {{-- <th scope="col" class="px-4 py-3">Created by</th> --}}
                                {{-- <th scope="col" class="px-4 py-3">Modified by</th> --}}
                                <th scope="col" class="pr-8">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($papers->reverse() as $paper)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $paper->vol_no }}
                                    </th>
                                    <td class="px-6 py-4">{{ $paper->issue_no }}</td>
                                    <td class="px-6 py-4">{{ $paper->paper_no }}</td>
                                    <td class="px-6 py-4">{{ $paper->paper_title }}</td>
                                    {{-- <td class="px-6 py-4">{{ $paper->paper_name }}</td> --}}
                                    {{-- <td class="px-6 py-4">{{ $paper->start_page_no }}</td> --}}
                                    {{-- <td class="px-6 py-4">{{ $paper->end_page_no }}</td> --}}
                                    <td class="px-6 py-4">{{ $paper->authors }}</td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('papers.changeStatus', ['vol_no' => $paper->vol_no, 'issue_no' => $paper->issue_no, 'paper_no' => $paper->paper_no]) }}">
                                        {{ $paper->status }}</a>
                                    </td>
                                    {{-- <td class="px-6 py-4">{{ $paper->created_by }}</td> --}}
                                    {{-- <td class="px-6 py-4">{{ $paper->updated_by }}</td> --}}

                                    <td class="px-6 py-4 space-x-4">
                                        <a href="{{ route('papers.show', [$paper->vol_no, $paper->issue_no, $paper->paper_no]) }}"
                                            class="font-medium text-green-600 dark:text-green-500 pl-4 ">Show</a>
                                        <a href="{{ route('papers.edit', [$paper->vol_no, $paper->issue_no, $paper->paper_no]) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 ">Edit</a>
                                        <a href="{{ route('papers.destroy', $paper->paper_no) }}"
                                            class="font-medium text-red-600 dark:text-red-500 ">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Handler for 'select volume no' dropdown
            $('#vol_no').on('change', function() {
                var selectedVolume = $(this).val();
                if (selectedVolume !== '') {
                    // Send an AJAX request to get issue numbers based on selected volume
                    $.ajax({
                        url: '/get-issues/' + selectedVolume,
                        method: 'GET',
                        success: function(response) {
                            // Populate 'select issue no' dropdown with the retrieved data
                            $('#issue_no').empty().append($('<option>').val('').text(
                                'Select an Issue'));
                            $.each(response.issues, function(key, value) {
                                $('#issue_no').append($('<option>').val(value.issue_no)
                                    .text('Issue ' + value.issue_no));
                            });
                        }
                    });
                } else {
                    $('#issue_no').empty().append($('<option>').val('').text('Select an Issue'));
                }
            });
        });
    </script>
@endsection()
