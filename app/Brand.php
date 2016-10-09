<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand'
    ];


    /**
     * Get the  models for the brand.
     */
    public function watch_model()
    {
        return $this->hasMany('App\watch_model');
    }

    /**
     * Get the watch that owns the Brand.
     */
    public function watch()
    {
        return $this->hasOne('App\Watch');
    }



}
