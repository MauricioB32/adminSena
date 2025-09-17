<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function area()
{
    return $this->belongsTo(Area::class); 
}

        public function training_center()
{
    return $this->belongsTo(Training_center::class);
}

public function apprentices()
{
    return $this->hasMany(Apprentice::class);

}

public function teachers()
{
    return $this->belongsToMany(Teacher::class, 'course_teacher');
}


}