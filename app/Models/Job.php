<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $table = 'jobs';

    protected $fillable = [

        'id',
        'email',
        'jobtitle',
        'location',
        'region',
        'jobtype',
        'jobcategory',
        'jobdesc',
        'vacancy',
        'ex',
        'sal',
        'gender',
        'respon',
        'edu',
        'ben',
        'status',
        'companyname',
        'user_id',
        'image',
        'website',
        'linkedin',
        'month',
        'created_at',
        'updated_at'
    ];

    public $timestamps = true;


    public function scopeSelection($q) {
        return $q->select('id', 'email', 'jobtitle', 'location', 'region', 'jobtype', 'jobcategory', 'jobdesc', 'companyname', 'website', 'linkedin', 'created_at' );

    }

    public function savedJobs()
    {
        return $this->hasMany('App\Models\SavedJob','job_id', 'id');
    }

    public function getCategory() {
        return $this->belongsTo('App\Models\Category','jobcategory','name');
    }

    public function emails()
    {
        return $this->hasMany('App\Models\Email','job_id_email');
    }
}
