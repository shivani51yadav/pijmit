@extends('components.admin-layout')

@section('content')
    <div class="mx-auto max-w-screen-xl">
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-semibold mb-4">{{ $paper->paper_title }}</h2>

                <dl class="grid grid-cols-2 gap-x-4 gap-y-8 mb-8 gap-8">
                    <div class="col-span-2 sm:col-span-1">
                        <dt class="text-gray-500">Volume No.</dt>
                        <dd>{{ $paper->vol_no }}</dd>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <dt class="text-gray-500">Issue No.</dt>
                        <dd>{{ $paper->issue_no }}</dd>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <dt class="text-gray-500">Paper No.</dt>
                        <dd>{{ $paper->paper_no }}</dd>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <dt class="text-gray-500">Paper Title</dt>
                        <dd>{{ $paper->paper_title }}</dd>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <dt class="text-gray-500">Start Page No.</dt>
                        <dd>{{ $paper->start_page_no }}</dd>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <dt class="text-gray-500">End Page No.</dt>
                        <dd>{{ $paper->end_page_no }}</dd>
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <dt class="text-gray-500">Status</dt>
                        <dd>{{ $paper->status }}</dd>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <dt class="text-gray-500">Authors</dt>
                        <dd>{{ $paper->authors }}</dd>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <dt class="text-gray-500">Created by</dt>
                        <dd>{{ $paper->created_by }}</dd>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <dt class="text-gray-500">Modified by</dt>
                        <dd>{{ $paper->updated_by }}</dd>
                    </div>

                    <div class="flex justify-start items-center">
                        <a href="{{ route('papers') }}" <button
                            class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                            <span
                                class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                Back
                            </span>
                            </button>
                        </a>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold mb-2">Upload Paper</h3>
                        <p class="text-gray-700">Click the link below to download the paper :</p>
                        <a href="{{ asset($paper->file_path) }}" class="text-blue-600 hover:underline" download>Download
                            PDF</a>
                    </div>
            </div>
        </div>
    </div>
@endsection
