<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class watch_model extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'model','brand_id'
    ];


    /**
     * Get the brand that owns the model.
     */
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    /**
     * Get the Watch  that owns the model .
     */
    public function watch()
    {
        return $this->HasOne('App\Watch');
    }
}
