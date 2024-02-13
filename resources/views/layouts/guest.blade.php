@extends('mainlayout')
@section('title', 'AJC-Login')

@section('content')
        <div class="min-h-screen flex flex-col sm:justify-center items-center sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-md  px-1 bg-white py-1 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
@endsection