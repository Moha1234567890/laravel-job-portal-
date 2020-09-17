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
        'companyname',
        'website',
        'linkedin',
        'created_at',
        'updated_at'
    ];

    public $timestamps = true;


    public function scopeSelection($q) {
        return $q->select('id', 'email', 'jobtitle', 'location', 'region', 'jobtype', 'jobcategory', 'jobdesc', 'companyname', 'website', 'linkedin', 'created_at' );

    }
}
