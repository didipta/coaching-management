<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applypost extends Model
{
    use HasFactory;
    public function postinfo(){
        
        $post= $this->hasOne(Teachingpost::class,'id','Post_id');
        return $post;
   }

    public function userinfo(){
        
        $user= $this->hasOne(Userr::class,'id','user_id');
        return $user;
   }
}
