@extends('components.admin-layout')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="mx-auto max-w-screen-xl">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-4">Issue Details</h2>
                    <p><strong>Issue No:</strong> {{ $issue->issue_no }}</p>
                    <p><strong>Issue Type:</strong> {{ $issue->issue_type }}</p>

                    <h2 class="text-2xl font-semibold mt-8">Papers in Issue No. {{$issue->issue_no }}</h2>
                    <ul class="list-disc pl-6 mt-4">
                        @forelse ($papers as $paper)
                            <li>
                                <strong>Paper No.</strong> {{ $paper->paper_no }}<br>
                                <strong>Paper Title:</strong> {{ $paper->paper_title }}<br>
                                <strong>Author(s):</strong> {{ $paper->authors }}<br>
                                <strong>Page No(s):</strong> {{ $paper->page_no }}<br>
                            </li>
                            <br>
                        @empty
                            <p>No papers found in this issue.</p>
                        @endforelse
                    </ul>
                </div>
                <div class="px-6 py-4 bg-gray-100 dark:bg-gray-700 flex justify-end">
                    <a href="{{ route('issues.edit', [$issue->issue_no, $issue->vol_no]) }}" class="text-blue-500 hover:underline">Edit Issue</a>
                </div>
            </div>
        </div>
    </section>
@endsection
