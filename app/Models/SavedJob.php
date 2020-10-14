<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavedJob extends Model
{
    protected $table = 'savedjobs';

    protected $fillable = [


        'id',
        'user_id',
        'job_id',
        'pic',
        'job_title',
        'company_name',
        'location',
        'region',
        'job_type',
        'created_at',
        'updated_at'

    ];

    public $timestamps = true;


    public function jobs()
    {
        return $this->belongsTo('App\Models\Job', 'job_id', 'id');
    }





}
