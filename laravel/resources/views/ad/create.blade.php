@extends('admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Announcement</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ action('ListingController@store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" id="latitude" name="latitude"/>
                            <input type="hidden" id="longitude" name="longitude"/>

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Enter a title for your ad" autocomplete="off">

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label for="price" class="col-md-4 control-label">Price</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" placeholder="$10000" autocomplete="off">

                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('property_type') ? ' has-error' : '' }}">
                                <label for="property_type" class="col-md-4 control-label">Property Type</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="property_type" id="property_type" required>
                                        <option value="">«Select Type»</option>
                                        @foreach($propertyTypes as $listedType)
                                            <option value="{{ $listedType->id }}">{{ $listedType->name }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('property_type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('property_type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('listing_type') ? ' has-error' : '' }}">
                                <label for="listing_type" class="col-md-4 control-label">What do you want to do?</label>

                                <div class="col-md-6">
                                    <label class="radio-inline">
                                        <input name="listing_type_id" type="radio" value="1"/>
                                        Rent
                                    </label>

                                    <label class="radio-inline">
                                        <input name="listing_type_id" type="radio" value="1"/>
                                        Sale
                                    </label>

                                    @if ($errors->has('listing_type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('listing_type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <textarea id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="Ej: Perez de la Rosa"  autocomplete="off"></textarea>

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                                <label for="file" class="col-md-4 control-label">File</label>

                                <div class="col-md-6">
                                    <input id="name" type="file" class="form-control" required name="file" value="{{ old('file') }}">

                                    @if ($errors->has('file'))
                                        <span class="help-block">
	                                        <strong>{{ $errors->first('file') }}</strong>
	                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <a type="" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-btn fa-user"></i> Where is it?
                                    </a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-btn fa-user"></i> Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Where is the property?</h4>
                    </div>
                    <div class="modal-body">
                        <div id="map_canvas" style="width:100%; height:250px;">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
        <script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBO4Y-K7BliM7FwosMNJtmdke7mL77dDog"></script>
        <script type="text/javascript">
            var map;
            var layer;
            var layer2;
            var layer3;
            var unique = false;
            var marker;
            var latitude;
            var longitude;

            jQuery(document).ready(function () {
                init();
                latitude = $('#latitude');
                longitude = $('#longitude');

                $("#myModal").on("shown.bs.modal", function () {
                    google.maps.event.trigger(map, "resize");
                });
            });

            function init() {

                var myLatlng = new google.maps.LatLng(18.49895, -69.95355);
                var myOptions = {
                    zoom: 13,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP

                };
                //declare new instance of map to display in #map_canvas div
                map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                google.maps.event.addListener(map, 'click', function (event) {
                    if (!unique) {
                        placeMarker(event.latLng);
                        unique = true;
                    }
                    else
                        marker.setPosition(event.latLng);
                    latitude.val(event.latLng.lat());
                    longitude.val(event.latLng.lng());

                });

                function placeMarker(location) {
                    marker = new google.maps.Marker({
                        position: location,

                        map: map
                    });
                }
            }
        </script>
    @endsection
@endsection
