@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
    </h2>
@endsection

@section('content')
    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    @if (session('warning'))
        <div class="mb-4 p-4 bg-yellow-100 text-yellow-800 rounded">
            {{ session('warning') }}
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Welcome Message --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @php
                    $userType = auth()->user()->user_type;
                    $colorClass = match($userType->value ?? $userType) {
                        'admin' => 'bg-green-300 text-green-900',
                        'influencer' => 'bg-pink-300 text-pink-900',
                        'supplier' => 'bg-blue-300 text-blue-900',
                    };
                @endphp
            </div>

            {{-- Dashboard Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <a href="{{ route('employees.index') }}" class="bg-white dark:bg-gray-700 border rounded-lg shadow hover:shadow-lg p-6 transition">
                    <h3 class="text-xl font-bold text-blue-700 mb-2">Employee List</h3>
                    <p class="text-gray-600 dark:text-gray-300">Browse all employees in a structured list view.</p>
                </a>

                <a href="{{ route('employees.list') }}" class="bg-white dark:bg-gray-700 border rounded-lg shadow hover:shadow-lg p-6 transition">
                    <h3 class="text-xl font-bold text-green-700 mb-2">Employees on Map</h3>
                    <p class="text-gray-600 dark:text-gray-300">View employee locations on an interactive map.</p>
                </a>

                <!-- <a href="{{ route('maps.index') }}" class="bg-white dark:bg-gray-700 border rounded-lg shadow hover:shadow-lg p-6 transition">
                    <h3 class="text-xl font-bold text-yellow-700 mb-2">Place List</h3>
                    <p class="text-gray-600 dark:text-gray-300">Explore a list of saved places and their details.</p>
                </a>

                <a href="{{ route('maps.list') }}" class="bg-white dark:bg-gray-700 border rounded-lg shadow hover:shadow-lg p-6 transition">
                    <h3 class="text-xl font-bold text-pink-700 mb-2">Places on Map</h3>
                    <p class="text-gray-600 dark:text-gray-300">Interactively view all stored places on a map.</p>
                </a> -->
            </div>

        </div>
    </div>
@endsection
