<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Images extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'images';
    
    protected $fillable = [
          'item_id',
          'image'
    ];
    

    public static function boot()
    {
        parent::boot();

        Images::observe(new UserActionsObserver);
    }

    public function item()
    {
        return $this->belongsTo('App\Items');
    }
    
    
}