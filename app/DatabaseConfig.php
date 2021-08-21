<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatabaseConfig extends Model
{
    //
    protected $table= 'database_config';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'db_name', 'db_connection','db_host','db_user_name','db_password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'db_password'
    ];
}
