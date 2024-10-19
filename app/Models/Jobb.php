<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobb extends Model
{
    use HasFactory;
       //Job Title, Applicant Name, Email, Cover Letter
       protected $fillable=[
        'job_name',
        'name',
        'email',
        'cover_letter'
    ];
}
