@extends('layout')

@section('title', 'Apply for Admission')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content') 
    <h1 class="text-4xl fw-bold mb-3">Apply for Admission</h1>
    <p class="mb-0">
        Please fill out the application form below to apply for admission. Make sure to provide accurate information and submit all required documents.
    </p>
@endsection