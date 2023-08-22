@extends('components.admin-layout')
@section('title')
    Papers
@endsection

@section('content')
                            <!-- Volumes Table -->

                            @component('adminPages.papertable')
                            @endcomponent

@endsection
