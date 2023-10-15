<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model 
{

    protected $table = 'offers';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('service_id', 'price', 'from', 'to', 'is_close', 'user_id');

    public function service()
    {
        return $this->belongsTo('App\Models\Services');
    }

}