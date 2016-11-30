<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model {

    public $guarded = ['id'];

    public function Listings() {
        return $this->hasMany('App\Listings');
    }
    
}