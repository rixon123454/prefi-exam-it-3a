<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subject'; 

    protected $fillable = [

        'subject_code',
        'name',
        'description',
        'instructor',
        'schedule',
        'prelims',
        'midterms',
        'pre_finals',
        'average',
        'remarks',
        'date_taken'

        ];
}
