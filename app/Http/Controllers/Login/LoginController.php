<?php

namespace App\Http\Controllers\Login;
use DB;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function goLoginPage()
    {
        return view('login\login');
    }
    public function login(Request $request)
    {
        //dd($request->all());
        // $input=$request->all();
        // $user_id=$input['user_id'];
        // $psw=$input['psw'];
        // $user=new User();
        // $query=$user->find($user_id);
        $input=$request->all();
        $user=DB::table('users')->where('id',$input['user_id'])->first();
        //dd($user->password);
        if($user->password==$input['psw'])
        {
            return view('manage/manage_index');
        }
        else
        {
            echo "<script>alert('账号与密码不匹配！');</script>";
            return view('login\login');
        }
        //return view('login\login');
    }
}
