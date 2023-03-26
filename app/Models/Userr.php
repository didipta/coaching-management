<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userr extends Model
{
    use HasFactory;
    
    public function Userinfo(){
        
        return $this->hasOne(Userinfoo::class,'user_id','id');
    }
}
