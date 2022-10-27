<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Course;

class School extends Model
{
    use HasFactory;

    public function student () {

        return $this->hasManyThrough( Student::class, Course::class);
    }
}
