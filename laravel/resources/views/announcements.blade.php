<!DOCTYPE html>
<html>
<head>
    @extends('layouts.header')
</head>
<body>
<div class="container">
    <h4>All announcements:</h4>

    <div class="row">
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
    @extends('layouts.footer')
</div>
</body>
</html>