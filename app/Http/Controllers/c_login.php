<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\category;
use App\themes;
use App\articles;
use File;
use Mail;

class c_login extends Controller
{
    function __construct()
    {
        $head_logo = themes::where('note','logo')->first();

        view()->share( [
            'head_logo'=>$head_logo,
        ]);
    }

    public function getlogin()
    {
        return view('login.login');
    }

    public function postlogin(Request $request)
    {
    	$this->validate($request,[
    		'email' => 'required',
    		'password' => 'required|min:3|max:32'
    		],[]);
    	if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
    	{
            if (Auth::User()->permission == 5) {
                return redirect('/');
            }else{
                return redirect('admin/dashboard');
                // return view('login.checklogin');
            }
    	}
    	else
    	{
            return redirect()->back()->with('Alerts','Tài khoản hoặc mật khẩu không đúng !');
    	}
    }
    public function getresetpassword()
    {
        return view('login.resetpassword',[
        ]);
    }
    public function postresetpassword(Request $Request)
    {
        $user = User::where('email', $Request->email)->first();
        $user->password = bcrypt($Request->password);
        $user->save();
        return redirect('admin')->with('Success','Đổi mật khẩu thành công');
    }
    public function getsignup()
    {
        return view('login.signup',[]);
    }
    public function postsignup(Request $Request)
    {
        $this->validate($Request,
            [
                "email" => "unique:users,email",
            ],[
                "email.unique"=>"Email đã tồn tại trên hệ thống",
            ]);
        $user = new User;
        $user->your_name = $Request->your_name;
        $user->email = $Request->email;
        $user->password = bcrypt($Request->password);
        $user->permission = 5;
        $user->save();

        return redirect('login')->with('Success','Đăng ký thành công');
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
