<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{

    protected $table = 'searches';

    protected $fillable = [

        'id',
        'keyword',

        'created_at',
        'updated_at'
    ];

    public $timestamps = true;



}
