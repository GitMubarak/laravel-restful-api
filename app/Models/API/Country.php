<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "_z_country";

    protected $fillable = [
        'iso',
        'name',
        'dname',
        'iso3',
        'position',
        'numcode',
        'phonecode',
        'created',
        'register_by',
        'modified',
        'modified_by',
        'record_deleted'
    ];
}
