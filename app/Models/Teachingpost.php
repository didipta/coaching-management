<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachingpost extends Model
{
    use HasFactory;
    public function teacherinfo(){
        
         $teacher= $this->hasOne(Userr::class,'id','teacher_id');
         return $teacher;
    }
    public function teachpostinfo(){
        
         $teacher= $this->hasMany(Applypost::class,'Post_id','id');
         return $teacher;
    }
    
}
