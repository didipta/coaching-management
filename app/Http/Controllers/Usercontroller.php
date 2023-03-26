<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userr;
use App\Models\Userinfoo;
class Usercontroller extends Controller
{
    public function sigpupform(Request $request){
        $var = new Userr();
        $var->U_username= $request->name;
        $var->U_email=$request->email;
        $var->U_password=$request->password;
        $var->save();
        return $var;



    }
    public function userinfoset(Request $request){
        $var = new Userinfoo();
        $var->role= $request->role;
        $var->address=$request->address;
        $var->phone=$request->phone;
        $var->Education=$request->Education;
        $var->gender=$request->gender;
        $var->user_id=$request->user_id;
        $var->save();
        $user = Userr::select('*')->where('id',$request->user_id)->first();
        $data=(object) array('user'=>$user,'userinfo'=>$user->Userinfo);
        return $data;



    }
    public function signin(Request $request)
    {
        $email=$request->email;
        $pas=$request->password;
        $user = Userr::select('*')->where('U_email',$email)->where('U_password',$pas)->first();
        $data=(object) array('user'=>$user,'userinfo'=>$user->Userinfo);
        return $data;
    }

    public function getuserinfo(Request $request)
    {
        $email=$request->email;
        if($email!="login")
        {
            $user = Userr::select('*')->where('U_email',$email)->first();
            $data=(object) array('user'=>$user,'userinfo'=>$user->Userinfo);
            return $data;
        }
        else
        {
            $data=(object) array('user'=>"please login");
            return $data;
        }
    }
}
