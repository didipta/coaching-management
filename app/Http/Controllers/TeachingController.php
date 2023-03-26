<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teachingpost;
use App\Models\Applypost;
class TeachingController extends Controller
{
    public function Teachinpost(Request $request){
        $var = new Teachingpost();
        $var->Title=$request->Title;
        $var->Position=$request->Position;
        $var->Dutytime=$request->Dutytime;
        $var->Subject=$request->Subject;
        $var->Area=$request->Area;
        $var->teacher_id=$request->user_id;
        $var->save();
        return $var;



    }
    public function Applypost(Request $request){
        $var = new Applypost();
        $var->Salary=$request->salary;
        $var->Time=$request->timeset;
        $var->Post_id=$request->post_id;
        $var->user_id=$request->user_id;
        $var->save();
        return $var;




    }
    public function getAllpost(Request $request)
    {
        $var= Teachingpost::all();
         $arrry=[];
        foreach($var as $post)
        {
            $post->teacherinfo->Userinfo;
            $data=(object) array('post'=>$post);
            $arrry[]=$data;
        }
        return $arrry;

    }
    public function userApply(Request $request)
    {
        $user_id=$request->id;
        $var= Applypost::select('*')->where('user_id',$user_id)->get();
         $arrry=[];
        foreach($var as $post)
        {
            $post->postinfo->teacherinfo->Userinfo;
            $data=(object) array('post'=>$post);
            $arrry[]=$data;
        }
        return $arrry;

    }
    public function Allteacherpost(Request $request)
    {
        $user_id=$request->id;
        $var= Teachingpost::select('*')->where('teacher_id',$user_id)->get();
         $arrry=[];
        foreach($var as $post)
        {
           $posts=$post->teachpostinfo;
            foreach($posts as $posts)
            {
               $posts->userinfo->Userinfo;
            }
            $data=(object) array('post'=>$post);
            $arrry[]=$data;
        }
        return $arrry;

    }
}
