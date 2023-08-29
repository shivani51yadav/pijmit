@extends('components.admin-layout')

@section('content')

        <div class="About block md:h-1/3 w-full">
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500 dark:text-yellow-50 mt-8 text-start">
                Current Issue
            </h1>

            <!-- New Issue -->

            <div
                class="block max-w-full mt-14 rounded-lg bg-white text-left shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-500">
                <div class="p-6 md:max-w-[90%]">
                    <h5 class="mb-1 text-xl font-medium leading-tight text-neutral-800 dark:text-gray-200">
                        Current Issue
                    </h5>
                    <h6 class="mb-2 text-base font-medium leading-tight text-neutral-500 dark:text-gray-200">
                        Vol. {{ $currentIssue->vol_no }} ({{ $currentIssue->issue_no }}),{{ $currentIssue->vol_year }}
                    </h6>

                    <!-- Table of papers -->

                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full text-center text-sm font-light">
                                        <thead class="font-medium">
                                            <tr>
                                                <th scope="col" class="px-6 py-4 ">Paper No.</th>
                                                <th scope="col" class="px-6 py-4">Paper Title</th>
                                                <th scope="col" class="px-6 py-4">Authors</th>
                                                <th scope="col" class="px-6 py-4">Page No.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($currentIssue->papers as $paper)
                                                <tr>
                                                    <td class="px-6 py-4 font-medium">
                                                        {{ $paper->paper_no }}
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <div class="paper-01">
                                                            <a href="{{ asset($paper->file_path) }}" download>
                                                                <p
                                                                    class="mt-6 text-base  text-left leading-normal  dark:text-neutral-200 hover:text-cyan-500  text-fuchsia-600 hover:underline">
                                                                    {{ $paper->paper_title }}
                                                                </p>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <h6 class="mt-1 font-semibold text-gray-700">
                                                            {{ $paper->authors }}
                                                        </h6>
                                                    </td>
                                                    <td class="px-6 py-4">{{ $paper->page_no }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        {{-- <h1>Current Issue Details</h1>

    <p>Volume No: {{ $currentIssue->vol_no }}</p>
    <p>Issue No: {{ $currentIssue->issue_no }}</p>

    <h2>Papers in the Current Issue</h2>

    @if ($papers->count() > 0)
        <ul>
            @foreach ($papers as $paper)
                <li>
                    <strong>Paper No:</strong> {{ $paper->paper_no }}<br>
                    <strong>Paper Title:</strong> {{ $paper->paper_title }}<br>
                    <strong>Authors:</strong> {{ $paper->authors }}<br>
                    <strong>Start Page:</strong> {{ $paper->start_page_no }}<br>
                    <strong>End Page:</strong> {{ $paper->end_page_no }}<br>
                    <strong>Status:</strong> {{ $paper->status }}<br>
                    <strong>Created By:</strong> {{ $paper->created_by }}<br>
                    <strong>Updated By:</strong> {{ $paper->updated_by }}<br>

                </li>
            @endforeach
        </ul>
    @else
        <p>No papers available in the current issue.</p>
    @endif --}}
    @endsection
