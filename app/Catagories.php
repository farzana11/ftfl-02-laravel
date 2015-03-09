<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagories extends Model {

    protected $guarded = [];
    public function portfolios()
    {
        return $this->hasMany('App\Portfolios');
    }

}