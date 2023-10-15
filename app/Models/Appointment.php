<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model 
{

    protected $table = 'appointment';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('user_id', 'service_id', 'startDate', 'endDate', 'price', 'status', 'is_pay', 'client_note', 'provider_note');

}