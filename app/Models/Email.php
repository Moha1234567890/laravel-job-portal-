<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{

    protected $table = 'emails';

    protected $fillable = [

      'id',
      'job_id_email',
      'to_user',
      'from_user',
      'user_id',
      'user_name'
    ];

    public $timestamps = true;



}
