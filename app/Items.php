<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Items extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'items';
    
    protected $fillable = [
          'title',
          'description',
          'image'
    ];
    

    public static function boot()
    {
        parent::boot();

        Items::observe(new UserActionsObserver);
    }


    public function category()
    {
        return $this->belongsTo('App\Categories');
    }


    public function images()
    {
        return $this->hasMany('App\Images');
    }
    
    
    
}