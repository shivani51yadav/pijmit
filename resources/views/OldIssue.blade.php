@extends('layouts.layout')
@section('title')
    Old Issues
@endsection

@section('content')
    <!-- Body -->


    <!-- ABOUT PIMRG -->

    <div
        class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white dark:bg-slate-800 md:max-w-[80%] m-auto pt-20 md:mt-20 mb-10 rounded-xl ">
        {{-- <div class="About block md:h-1/3 w-full md:w-2/3 ">
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500 dark:text-slate-200">
                Old Issue
            </h1>
            <div
                class="block max-w-full mt-14 rounded-lg bg-white text-left shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                <div class="p-6 mt-14">
                    <h5 class="mb-1 text-xl font-medium leading-tight text-neutral-800 dark:text-slate-400">
                        Volume-11
                    </h5>
                    <h6 class="mb-2 text-base font-medium leading-tight text-neutral-500 dark:text-gray-300">
                        Issue-1
                    </h6>
                    <div class="paper-1">
                        <a href="">
                            <p
                                class="mt-6 text-base leading-normal text-neutral-600 hover:text-cyan-600 dark:text-neutral-200 dark:hover:text-yellow-500  hover:text-underline">
                                Paper 01: Challenges of Well Being in and Post-Lockdown Period: Exploring Ayurveda, Yoga and
                                Spirituality as a Conduit for Rejuvenation and Overall Wellness
                            </p>
                        </a>
                        <h6 class="mb-4 text-purple-600">
                            Manpreet Arora, Roshan Lal Sharma
                        </h6>
                    </div>
                    <div class="paper-2">
                        <a href="">
                            <p
                                class="mt-6 text-base leading-normal text-neutral-600 hover:text-cyan-600  dark:text-neutral-200 dark:hover:text-yellow-500">
                                PAPER 02 : A Conceptual Perspective of Online Impulsive Buying Behavior of Gen Z: Role of
                                Customers’ Emotions and Traits in the New Normal Era </p>
                        </a>
                        <h6 class="mb-4 text-purple-600">
                            Aditya Yadav, Shiv Kumar Sharma
                        </h6>
                    </div>
                    <div class="paper-3">
                        <a href="">
                            <p
                                class="mt-6 text-base leading-normal text-neutral-600 hover:text-cyan-600 dark:text-neutral-200 dark:hover:text-yellow-500">
                                Paper 03 : Gandhian Way of Conflict Resolution </p>
                        </a>
                        <h6 class="mb-0 text-purple-600">
                            Rajesh Kumar Pandey </h6>
                    </div>
                </div>

                <!-- Volume10,Issue-2 -->

                <div
                    class="block max-w-full rounded-lg bg-white text-left shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 ">
                    <div class="p-6">
                        <h5 class="mb-1 text-xl font-medium leading-tight text-neutral-800 dark:text-slate-400">
                            Volume-10
                        </h5>
                        <h6 class="mb-2 text-base font-medium leading-tight text-neutral-500 dark:text-gray-300">
                            Issue-2
                        </h6>
                        <div class="paper-1">
                            <a href="">
                                <p
                                    class="mt-6 text-base leading-normal text-neutral-600 hover:text-cyan-600 dark:text-neutral-200 dark:hover:text-yellow-500  hover:text-underline">
                                    Paper 01: Does Burnout Lead To Impulse Buying Behavior? </p>
                            </a>
                            <h6 class="mb-4 text-purple-600">
                                Meenu Singla, Joshita Garg </h6>
                        </div>
                        <div class="paper-2">
                            <a href="">
                                <p
                                    class="mt-6 text-base leading-normal text-neutral-600 hover:text-cyan-600 dark:text-neutral-200 dark:hover:text-yellow-500  hover:text-underline">
                                    PAPER 02 : Reimagining Education In New Normal Post Covid-19 Era: The Viewpoint Of
                                    Higher Education Institutions
                            </a>
                            <h6 class="mb-4 text-purple-600">
                                Eti Jain, Shiv Kumar Sharma and Arvind Kumar
                        </div>
                        <div class="paper-3">
                            <a href="">
                                <p
                                    class="mt-6 text-base leading-normal text-neutral-600 hover:text-cyan-600 dark:text-neutral-200 dark:hover:text-yellow-500  hover:text-underline">
                                    Paper 03 : A Study Of Impact For Various Factors Of Workplace Ostracism In Selected
                                    Organizations
                            </a>
                            <h6 class="mb-4 text-purple-600">
                                Neelam Kaushal, Subhanjali Chopra and Anchal Goyal
                        </div>
                        <div class="paper-4">
                            <a href="">
                                <p
                                    class="mt-6 text-base leading-normal text-neutral-600 hover:text-cyan-600 dark:text-neutral-200 dark:hover:text-yellow-500  hover:text-underline">
                                    Paper 04: Impact of Covid-19 Scenarios on Tourism Industry and Social Media Usage:
                                    Strategies to Overcome
                            </a>
                            <h6 class="mb-4 text-purple-600">
                                Ganesha K S and Ganapati B Sinnoor
                        </div>
                        <div class="paper-5">
                            <a href="">
                                <p
                                    class="mt-6 text-base leading-normal text-neutral-600 hover:text-cyan-600 dark:text-neutral-200 dark:hover:text-yellow-500  hover:text-underline">
                                    Paper 05: Role of Career Satisfaction Between Workplace Mindfulness and Intention to
                                    Leave
                            </a>
                            <h6 class="mb-4 text-purple-600">
                                Santosh Kumari
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        @foreach ($volumeData as $volume)
            @foreach ($volume->issues as $issue)
                <div
                    class="block max-w-full mt-14 rounded-lg bg-white text-left shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="p-6 mt-14">
                        <h5 class="mb-1 text-xl font-medium leading-tight text-neutral-800 dark:text-slate-400">
                            Volume-{{$volume->vol_id}}
                        </h5>
                        <h6 class="mb-2 text-base font-medium leading-tight text-neutral-500 dark:text-gray-300">
                            Issue-{{$issue->issue_id}}
                        </h6>
                        @foreach ($issue->paper as $paper)
                            <div class="paper-{{$paper->paper_no}}">
                                <a href="">
                                    <p
                                        class="mt-6 text-base leading-normal text-neutral-600 hover:text-cyan-600 dark:text-neutral-200 dark:hover:text-yellow-500  hover:text-underline">
                                        Paper {{$paper->paper_no}}: {{$paper->paper_title}}
                                    </p>
                                </a>
                                <h6 class="mb-4 text-purple-600">
                                    {{$paper->authors}}
                                </h6>
                            </div>
                        @endforeach

                    </div>
                </div>
            @endforeach
        @endforeach

        <!-- CARDS -->
        @component('components.links')
        @endcomponent
    </div>
@endsection
