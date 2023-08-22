@extends('layouts.layout')
@section('title')
    New Issue
@endsection

@section('content')
    {{-- Current issues --}}

    <!-- Body -->

    <div
        class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white dark:bg-slate-800 md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
        <div class="About block md:h-1/3 w-full md:w-2/3">
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500 dark:text-yellow-50">
                Current Issue
            </h1>

            <!-- New Issue -->

            <div
                class="block max-w-full mt-14 rounded-lg bg-white text-left shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-500">
                <div class="p-6">
                    <h5 class="mb-1 text-xl font-medium leading-tight text-neutral-800 dark:text-gray-200">
                        Current Issue
                    </h5>
                    <h6 class="mb-2 text-base font-medium leading-tight text-neutral-500 dark:text-gray-200">
                        Vol. {{$currentIssue->vol_no}} ({{$currentIssue->issue_no}}),{{$currentIssue->volume->vol_year}}
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
                                                    {{$paper->paper_no}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="paper-01">
                                                        <a href="#">
                                                            <p
                                                                class="mt-6 text-base  text-left leading-normal  dark:text-neutral-200 hover:text-cyan-500  text-fuchsia-600 hover:underline">
                                                                {{$paper->paper_title}}
                                                            </p>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <h6 class="mt-1 font-semibold text-gray-700">
                                                        {{$paper->authors}}
                                                    </h6>
                                                </td>
                                                <td class="px-6 py-4">{{$paper->page_no}}</td>
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
        </div>

        <!-- CARDS -->
        @component('components.links')
        @endcomponent
    </div>
@endsection
