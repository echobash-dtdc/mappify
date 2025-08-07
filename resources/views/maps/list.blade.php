@extends('layouts.app')

@section('header')
    <div class="bg-blue-900 py-8 text-white text-center">
        <p class="text-lg">Show markers on the map.</p>
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

        // L.marker([28.480058406220326, 77.06223257350817]).addTo(map)
        // .bindPopup('<b>Hello!</b><br>This is Echobash home marker.')
        // .openPopup();

        // map.locate({ setView: true, maxZoom: 16 });
        // map.on('locationfound', function (e) {
        // L.marker(e.latlng).addTo(map)
        //     .bindPopup("You are here!").openPopup();
        // });
        @foreach ($maps as $map)
            var customIcon = L.icon({
                iconUrl: @json($map['image']),
                iconSize: [50,50],
                iconAnchor: [20,40],
                popupAnchor:[0,-40]
            });
            L.marker(@json([$map['latitude'], $map['longitude']]), { icon: customIcon }).addTo(map)
            .bindPopup("This is " + @json($map['name']))
        @endforeach
    </script>
@endpush