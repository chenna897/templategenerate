<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
protected $table = 'content';
protected $fillable = [
'name','content',
];
   /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

/**
 * The attributes that should be cast to native types.
 *
 * @var array
 */
protected $casts = [
    'email_verified_at' => 'datetime',
];
}
