<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
        public function area()
{
    return $this->belongsTo(Area::class); 
}

        public function training_center()
{
    return $this->belongsTo(Training_center::class);
}

public function courses()
{
    return $this->belongsToMany(Course::class, 'course_teacher');
}


}
