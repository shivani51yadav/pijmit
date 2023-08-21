@extends('components.admin-layout')
@section('title')
    Volumes
@endsection

@section('content')
                            <!-- Volumes Table -->

                            @component('adminPages.issuetable')
                            @endcomponent

@endsection
