{{-- @extends('components.admin-layout')

@section('content')
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- ... Modal header and content ... -->
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Update Issue</h3>
                    <form class="space-y-6" action="{{ route('issues.update', $issue->issue_no) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="vol_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                            Volume No.</label>
                        <select id="vol_no" name="vol_no"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Select a Volume</option>
                            @foreach ($volumes as $volume)
                                <option value="{{ $volume->vol_no }}"
                                    {{ old('vol_no') == $volume->vol_no ? 'selected' : '' }}>Volume {{ $volume->vol_no }}
                                </option>
                            @endforeach
                        </select>

                        <div>
                            <label for="issue_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Issue
                                No.</label>
                            <input type="text" name="issue_no" id="issue_no"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="eg.1" value="{{ old('issue_no', $issue->issue_no) }}" required>
                        </div>

                        <label for="issue_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                            Issue Type</label>
                        <select id="issue_type" name="issue_type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="old" {{ old('issue_type', $issue->issue_type) === 'old' ? 'selected' : '' }}>
                                Old</option>
                            <option value="current"
                                {{ old('issue_type', $issue->issue_type) === 'current' ? 'selected' : '' }}>Current</option>
                        </select>

                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SAVE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection --}}


{{-- @extends('components.admin-layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-semibold mb-4">Edit Issue</h1>
    @if(session('error'))
    <div class="bg-red-500 text-white p-3 mb-3">
        {{ session('error') }}
    </div>
    @endif
    <form action="{{ route('issues.update', [$issue->issue_no, $issue->vol_no]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="vol_no" class="block text-sm font-medium text-gray-700">Select Volume No.</label>
            <select id="vol_no" name="vol_no" class="form-input rounded-md shadow-sm mt-1 block w-full">
                <option value="" disabled>Select a Volume</option>
                @foreach ($volumes as $volume)
                    <option value="{{ $volume->vol_no }}"
                        {{ old('vol_no', $issue->vol_no) == $volume->vol_no ? 'selected' : '' }}>
                        Volume {{ $volume->vol_no }}
                    </option>
                @endforeach
            </select>
            @error('vol_no')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="issue_type" class="block text-sm font-medium text-gray-700">Select Issue Type</label>
            <select id="issue_type" name="issue_type" class="form-input rounded-md shadow-sm mt-1 block w-full">
                <option value="" disabled>Select Issue Type</option>
                <option value="old"
                    {{ old('issue_type', $issue->issue_type) == 'old' ? 'selected' : '' }}>Old</option>
                <option value="current"
                    {{ old('issue_type', $issue->issue_type) == 'current' ? 'selected' : '' }}>Current</option>
            </select>
            @error('issue_type')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="new_issue_no" class="block text-sm font-medium text-gray-700">New Issue No.</label>
            <input type="number" name="new_issue_no" id="new_issue_no"
                class="form-input rounded-md shadow-sm mt-1 block w-full" placeholder="eg. 2"
                value="{{ old('new_issue_no', $issue->issue_no) }}" required>
            @error('new_issue_no')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                Update Issue
            </button>
            <a href="{{ route('issues') }}"
                class="text-blue-500 hover:text-blue-600 font-semibold">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection --}}

@extends('components.admin-layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-semibold mb-4">Edit Issue</h1>
    @if(session('error'))
    <div class="bg-red-500 text-white p-3 mb-3">
        {{ session('error') }}
    </div>
    @endif
    <form action="{{ route('issues.update', [$issue->issue_no, $issue->vol_no]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="vol_no" class="block text-sm font-medium text-gray-700">Select Volume No.</label>
            <select id="vol_no" name="vol_no" class="form-input rounded-md shadow-sm mt-1 block w-full">
                <option value="" disabled>Select a Volume</option>
                @foreach ($volumes as $volume)
                    <option value="{{ $volume->vol_no }}"
                        {{ ( $issue->vol_no) == $volume->vol_no ? 'selected' : '' }}>
                        Volume {{ $volume->vol_no }}
                    </option>
                @endforeach
            </select>
            @error('vol_no')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="issue_type" class="block text-sm font-medium text-gray-700">Select Issue Type</label>
            <select id="issue_type" name="issue_type" class="form-input rounded-md shadow-sm mt-1 block w-full">
                <option value="" disabled>Select Issue Type</option>
                <option value="old" @if(old('issue_type', $issue->issue_type) == 'old') selected @endif>Old</option>
                <option value="current" @if(old('issue_type', $issue->issue_type) == 'current') selected @endif>Current</option>
            </select>
            @error('issue_type')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="new_issue_no" class="block text-sm font-medium text-gray-700">New Issue No.</label>
            <input type="number" name="new_issue_no" id="new_issue_no"
                class="form-input rounded-md shadow-sm mt-1 block w-full" placeholder="eg. 2"
                value="{{ ( $issue->issue_no) }}" required>
            @error('new_issue_no')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                Update Issue
            </button>
            <a href="{{ route('issues') }}"
                class="text-blue-500 hover:text-blue-600 font-semibold">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
