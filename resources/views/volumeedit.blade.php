@extends('components.admin-layout')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="mx-auto max-w-screen-xl">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-4">Edit Volume</h2>
                    <form action="{{ route('volumes.update', ['vol_no' => $volume->vol_no]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="vol_no" class="block text-sm font-medium text-gray-900 dark:text-white">Volume No.</label>
                            <input type="text" name="vol_no" id="vol_no" value="{{ $volume->vol_no }}" class="form-input">
                        </div>

                        <div class="mb-4">
                            <label for="vol_year" class="block text-sm font-medium text-gray-900 dark:text-white">Volume Year</label>
                            <input type="text" name="vol_year" id="vol_year" value="{{ $volume->vol_year }}" class="form-input">
                        </div>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded">
                            Update & Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
