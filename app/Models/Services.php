<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Services extends Model 
{

    protected $table = 'services';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'details', 'price', 'service_type_id');

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function attachment()
    {
        return $this->hasMany('Attachment');
    }

    public function serviceType()
    {
        return $this->belongsTo('App\Models\ServiceType');
    }

    public function offers()
    {
        return $this->hasMany('App\Models\Offer');
    }

}