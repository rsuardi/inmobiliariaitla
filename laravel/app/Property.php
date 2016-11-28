<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model {
    
    public function Listings() {
        return $this->hasMany('App\Listings');
    }
    
}