<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professor';
    protected $primaryKey = 'professor_id';

    protected $fillable = [
        'professor_university',
        'professor_name',
        'professor_email',
        'professor_phone',
        'professor_researchinterest',
        'professor_disciplines',
        'professor_subdisciplines'
    ];
}
