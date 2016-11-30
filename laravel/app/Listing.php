<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model {

    public $guarded = ['id'];

    public function property() {
        return $this->belongsTo('App\Property');
    }
    
    public function images() {
        return $this->hasMany('App\ListingImage');
    }
    
}