@extends('components.admin-layout')
@section('title')
    Issues
@endsection

@section('content')
                            <!-- Volumes Table -->

                            @component('adminPages.issuetable')
                            @endcomponent

@endsection
