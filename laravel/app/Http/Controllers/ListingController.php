<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Property;
use App\PropertyType;
use App\Listing;

use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Support\Facades\Input;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $propertyTypes = PropertyType::all();
        return view('ad.create', ['propertyTypes' => $propertyTypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $property = [
            'latitude' => Input::get('latitude'),
            'longitude' => Input::get('longitude'),
            'property_type_id' => 1
        ];

        $property = Property::create($property);

        $listing = [
            'title' => Input::get('title'),
            'description' => Input::get('description'),
            'price' => Input::get('price'),
            'property_id' => $property->id
        ];

        $listing = Listing::create($listing);

        if(Input::file())
        {
            $image = Input::file('file');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('img/announcement/' . $filename);
            $vvvvPath = 'img/announcement/' . $filename;


            Image::make($image->getRealPath())->save($path);

        } else {
            $vvvvPath = 'img/announcement/placeholder.jpg';
        }



        $listingImage = [
            'listing_id' => $listing->id,
            'image_path' => $vvvvPath
        ];


        $listingImage = ListingImage::create($listingImage);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
