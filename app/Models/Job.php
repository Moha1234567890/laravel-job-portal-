<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $table = 'jobs';

    protected $fillable = ['email', 'jobtitle', 'location', 'region', 'jobtype', 'jobdesc', 'companyname', 'website', 'linkedin', 'created_at', 'updated_at'];

    public $timesamps = true;
}
