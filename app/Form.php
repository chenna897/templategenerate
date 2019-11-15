<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'form';
    protected $fillable = [
        'project_name', 'starting_date', 'current_link','production_urlserver','test_serverurl','database_technology','font_technology','number_deliveries','number_ofdays','name_developer','date_report','Hour(IST)_report',
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
    ];}
