<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Articles extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'articles';
    
    protected $fillable = [
          'photo',
          'text'
    ];
    

    public static function boot()
    {
        parent::boot();

        Articles::observe(new UserActionsObserver);
    }
    
    
    
    
}