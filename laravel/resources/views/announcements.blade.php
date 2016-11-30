@extends('layouts.main')

@section('content')
    <div class="container">
        <h4>All announcements:</h4>

        <button onclick="toggleMapView();">Ver como en un mapa</button>

        <div id="listing-list" class="row">
            @foreach($listings as $listing)
                <div class="col s4">
                    <div class="card">
                        @if(!empty($listing->images[0]))
                            <div class="card-image">
                                <img src="{{ asset($listing->images[0]->image_path) }}">
                                <span class="card-title">Card Title</span>
                            </div>
                        @endif
                        <div class="card-content">
                            <h6>Title: {{ $listing->title }}</h6>
                            <h6>Price: {{ $listing->price }}</h6>
                            <h6>Address: {{ $listing->property->text_address }}</h6>

                            <p>Description: {{ $listing->description }}</p>
                        </div>
                        <div class="card-action">
                            <a class="btn btn-default" href="#">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div id="map_canvas" style="display:none; width:90%; height:250px;">

        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="//gitcdn.link/cdn/elisardofelix/gMapMarkersJs/9e60d5911e4cee3aab138d9045fb7441df953de5/gMapMarkersJs.js"></script>
    <script type="text/javascript">
        $(function() {
            map = $('#map_canvas');
        });
        var map;
        function toggleMapView() {
            $('#listing-list').toggle();
            $('#map_canvas').toggle();
            google.maps.event.trigger(map, "resize");
        }
        var mk = new mapsmarker('map_canvas', 13, 'roadmap');
        @foreach($listings as $listing)
        mk.addMarker(
                {{$listing->property->latitude}},
                {{$listing->property->longitude}},
                'Your Address no. {{$listing->property->id}}',
                '<h2>Your Address no. {{$listing->property->id}}</h2>'
        );
        @endforeach
        var initialize = mk.initialize('AIzaSyBO4Y-K7BliM7FwosMNJtmdke7mL77dDog');
        //key=AIzaSyBO4Y-K7BliM7FwosMNJtmdke7mL77dDog
    </script>
@endsection