<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavedJobs extends Model
{
    protected $table = 'savedjobs';

    protected $fillable = [


        'id',
        'user_id',
        'job_id',
        'created_at',
        'updated_at'

    ];

    public $timestamps = true;
}
