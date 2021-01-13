<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';

    protected $fillable = [

        'id',
        'name',
        'font',
        'cat_desc',
        'status',
        'created_at',
        'updated_at'
    ];

    public $timestamps = true;


    public function hasJobs() {
        return $this->hasMany('App\Models\Job', 'jobcategory','name');
    }


}