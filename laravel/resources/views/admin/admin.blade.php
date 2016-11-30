@extends('admin.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="row">
                    <!-- Card Projects -->
                    <div class="col-md-10 col-md-offset-1">
                        @foreach($listings as $listing)
                            <div class="card col-md-4">
                                <div class="card-image">
                                    <img class="img-responsive" src="{{ !empty($listing->images[0]) ?
                                    asset($listing->images[0]->image_path) : "img/announcement/default.jpg" }}">
                                    <span class="card-title">{{ $listing->title }}</span>
                                </div>

                                <div class="card-content">
                                    <p>{{ $listing->description }}</p>
                                </div>

                                <div class="card-action">
                                    <a href="#{{ $listing->id }}" target="new_blank">Ver Detalles</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
