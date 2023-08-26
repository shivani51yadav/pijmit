
@extends('components.admin-layout')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="mx-auto max-w-screen-xl">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="p-4">
                    <h2 class="text-xl font-medium mb-2 gap-4">Volume Details</h2>
                    <p><strong>Volume ID:</strong> {{ $volume->vol_id }}</p>
                    <p><strong>Volume No:</strong> {{ $volume->vol_no }}</p>
                    <p><strong>Volume Year:</strong> {{ $volume->vol_year }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
