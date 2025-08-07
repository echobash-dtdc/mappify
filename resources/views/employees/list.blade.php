@extends('layouts.app')

@section('header')
    <div class="bg-blue-900 py-8 text-white text-center">
        <p class="text-lg">Show Employees on the map.</p>
    </div>
@endsection

@section('content')
    <div class="py-4 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 w-full h-[70vh]"  id="map">
                
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        var map = L.map('map').setView([22, 76], 5)

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.opkenstreetmap.org/">OpenStreetMap</a> contributors'
        }).addTo(map);

        @foreach ($employees as $employee)
            @php
                $image = $employee['image']
                    ? asset("images/employees/{$employee['image']}")
                    : 'https://static.vecteezy.com/system/resources/previews/051/270/245/non_2x/cartoon-people-avatar-minimalist-human-avatar-versatile-icon-for-online-projects-an-avatar-for-the-profile-picture-of-someone-vector.jpg';
            @endphp
            var customIcon = L.icon({
                iconUrl: @json($image),
                iconSize: [30,30],
                iconAnchor: [20,40],
                popupAnchor:[0,-40]
            });
            L.marker(@json([$employee['latitude'], $employee['longitude']]), { icon: customIcon }).addTo(map)
            .bindPopup("This is " + @json($employee['name']))
        @endforeach
    </script>
@endpush