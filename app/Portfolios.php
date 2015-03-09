<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolios extends Model {


    protected $guarded = [];

    public function catagories()
    {
        return $this->belongsTo('App\Catagories');
    }
}
