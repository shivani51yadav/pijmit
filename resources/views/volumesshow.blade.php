
@extends('components.admin-layout')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="mx-auto max-w-screen-xl">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="p-4">
                    <h2 class="text-xl font-medium mb-2 gap-4 ">Volume Details</h2>
                    <p><strong>Volume ID:</strong> {{ $volume->vol_id }}</p>
                    <p><strong>Volume No:</strong> {{ $volume->vol_no }}</p>
                    <p><strong>Volume Year:</strong> {{ $volume->vol_year }}</p>

                    <div class="back-button gap-4 pt-8">
                    <a href="{{ route('volumes') }}" <button
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Back
                    </span>
                    </button>
                </a>
            </div>
                </div>
            </div>
        </div>
    </section>
@endsection
