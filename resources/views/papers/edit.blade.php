@extends('components.admin-layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papers</title>

    <!-- Include Bootstrap CSS if needed -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Handler for 'select volume no' dropdown
            $('#vol_no').on('change', function() {
                var selectedVolume = $(this).val();
                if (selectedVolume !== '') {
                    // Send an AJAX request to get issue numbers based on selected volume
                    $.ajax({
                        url: '/get-issues/' + selectedVolume,
                        method: 'GET',
                        success: function(response) {
                            // Populate 'select issue no' dropdown with the retrieved data
                            $('#issue_no').empty().append($('<option>').val('').text('Select an Issue'));
                            $.each(response.issues, function(key, value) {
                                $('#issue_no').append($('<option>').val(value.issue_no).text('Issue ' + value.issue_no));
                            });
                        }
                    });
                } else {
                    $('#issue_no').empty().append($('<option>').val('').text('Select an Issue'));
                }
            });
        });
    </script>
</head>
<body>
    <!-- Your page content here -->

    @yield('content')

    <!-- Include Bootstrap JS if needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@section('content')
<div class="mx-auto max-w-screen-xl">
    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="p-6">
            <h2 class="text-2xl font-semibold mb-4">Edit Paper</h2>

            <form action="{{ route('papers.update', [$paper->vol_no, $paper->issue_no, $paper->paper_no]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="vol_no" class="block font-medium text-gray-900 dark:text-white">Select a Volume No.</label>
                    <select id="vol_no" name="vol_no" class="form-input w-full">
                        @foreach ($volumes as $volume)
                            <option value="{{ $volume->vol_no }}" {{ $paper->vol_no == $volume->vol_no ? 'selected' : '' }}>Volume {{ $volume->vol_no }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="issue_no" class="block font-medium text-gray-900 dark:text-white">Select an Issue No.</label>
                    <select id="issue_no" name="issue_no" class="form-input w-full">
                        @foreach ($issues as $issue)
                            <option value="{{ $issue->issue_no }}" {{ $paper->issue_no == $issue->issue_no ? 'selected' : '' }}>Issue {{ $issue->issue_no }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="paper_no" class="block font-medium text-gray-900 dark:text-white">Paper No.</label>
                    <input type="text" name="paper_no" id="paper_no" value="{{ $paper->paper_no }}" class="form-input w-full">
                </div>

                <div class="mb-4">
                    <label for="paper_title" class="block font-medium text-gray-900 dark:text-white">Paper Title</label>
                    <input type="text" name="paper_title" id="paper_title" value="{{ $paper->paper_title }}" class="form-input w-full">
                </div>

                <div class="mb-4">
                    <label for="paper_name" class="block font-medium text-gray-900 dark:text-white">Paper Name</label>
                    <input type="text" name="paper_name" id="paper_name" value="{{ $paper->paper_name }}" class="form-input w-full">
                </div>
                <div class="mb-4">
                    <label for="paper_no" class="block font-medium text-gray-900 dark:text-white">Paper No.</label>
                    <input type="text" name="paper_no" id="paper_no" value="{{ $paper->paper_no }}" class="form-input w-full">
                </div>
                <div class="mb-4">
                    <label for="page_no" class="block font-medium text-gray-900 dark:text-white">Page No.</label>
                    <input type="text" name="page_no" id="page_no" value="{{ $paper->page_no }}" class="form-input w-full">
                </div>

                <div class="mb-4">
                    <label for="authors" class="block font-medium text-gray-900 dark:text-white">Authors</label>
                    <input type="text" name="authors" id="authors" value="{{ $paper->authors }}" class="form-input w-full">
                </div>
                <div class="mb-4">
                    <label for="modified_by" class="block font-medium text-gray-900 dark:text-white">Modified by</label>
                    <input type="text" name="modified_by" id="modified_by" value="{{ $paper->modified_by }}" class="form-input w-full">
                </div>

                <div class="mb-4">
                    <label for="pdf_file" class="block font-medium text-gray-900 dark:text-white">Upload Paper PDF</label>
                    <input type="file" name="pdf_file" accept=".pdf" value="">
                </div>

                <div class="flex justify-end items-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">Save Changes</button>
                    <a href="{{ route('papers') }}"
                    class="text-blue-500 hover:text-blue-600 font-semibold ml-2">
                    Cancel
                </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
