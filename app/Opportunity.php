<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Opportunity extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'company_name', 'kra_pin', 'description', 'location', 'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];
}
