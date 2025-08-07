@extends('layouts.app')

@section('header')
    <div class="bg-blue-900 py-12 text-white text-center">
        <h2 class="text-4xl font-bold mb-2">Maps</h2>
        <p class="text-lg">Explore the various maps and visuals in our digital ecosystem.</p>
    </div>

    <div class="bg-white px-4 py-4 text-sm text-gray-600 max-w-7xl mx-auto">
        <nav class="flex items-center space-x-2">
            <a href="/" class="text-blue-600 hover:underline">Home</a>
            <span>/</span>
            <span class="text-gray-500">Maps</span>
        </nav>
    </div>
@endsection

@section('content')
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="py-12 bg-white">
                <a href="{{ route('employees.list') }}" class="bg-blue-500 text-white px-4 py-4 rounded hover:bg-blue-600">See on Map</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                @forelse ($employees as $employee)
                @php
                    $image = $employee['image']
                        ? asset("images/employees/{$employee['image']}")
                        : 'https://static.vecteezy.com/system/resources/previews/051/270/245/non_2x/cartoon-people-avatar-minimalist-human-avatar-versatile-icon-for-online-projects-an-avatar-for-the-profile-picture-of-someone-vector.jpg';
                @endphp
                    <div class="flex flex-col items-center text-center">
                        <img src="{{ $image }}" 
                             alt="{{ $employee->name }}" 
                             class="w-48 h-48 rounded-full object-cover border shadow-md">
                        
                        <h3 class="mt-4 text-xl font-semibold text-gray-800">
                            {{ $employee->name }}
                        </h3>
                        <p class="italic text-sm text-gray-500">{{ $employee->type ?? 'Map' }}</p>
                        <p class="mt-2 text-gray-600">{{ $employee->description }}</p>
                    </div>
                @empty
                    <div class="col-span-full text-center text-gray-500">
                        No Employees available.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection