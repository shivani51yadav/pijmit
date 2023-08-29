
    @extends('components.admin-layout')

    @section('content')
    <div
    class="flex flex-col md:flex-row gap-10 justify-center align-top shadow-lg bg-white dark:bg-slate-800 m-auto  mb-10 rounded-xl ">
        <div class="About md:h-1/3 w-full flex flex-col gap-4 p-3">
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500 dark:text-slate-200">
                Old Issue
            </h1>
            @foreach ($Issues as $issue)
                <div
                    class="block max-w-full rounded-lg bg-white text-left shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="p-6">
                        <h5 class="mb-1 text-xl font-medium leading-tight text-neutral-800 dark:text-slate-400">
                            Volume-{{ $issue->vol_no }}
                        </h5>
                        <h6 class="mb-2 text-base font-medium leading-tight text-neutral-500 dark:text-gray-300">
                            Issue-{{ $issue->issue_no }}
                        </h6>
                        @foreach ($issue->papers as $paper)
                            <div class="paper-{{ $paper->paper_no }}">
                                <a href="{{ asset($paper->file_path) }}" download>
                                    <p
                                        class="mt-6 text-base leading-normal text-neutral-600 hover:text-cyan-600 dark:text-neutral-200 dark:hover:text-yellow-500  hover:text-underline">
                                        Paper {{ $paper->paper_no }}: {{ $paper->paper_title }}
                                    </p>
                                </a>
                                <h6 class="mb-4 text-purple-600">
                                    {{ $paper->authors }}
                                </h6>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
