<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\AddParrot;

class UserController extends Controller
{
    public function loginpage()
    {
        return View('login');
    }


    public function createaccount_store(Request $request)
    {
        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|min:11|unique:users,email',
            'password' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
        ]);

        $create = new User();
        $create->f_name = $request->f_name;
        $create->l_name = $request->l_name;
        $create->email = $request->email;
        $create->password = Hash::make($request->password);
        $create->date_of_birth = $request->date_of_birth;
        $create->gender = $request->gender;
        $create->save();
        Auth::login($create);
        return redirect()->route('user.dashboard');
    }

    public function showUsers()
    {
        $users = User::all();
        return view('users')->with('values', $users);
    }

    public function delete(Request $request,$id)
    {
        $del = User::where('id',$id);
        $del->delete();
        return back();
    }
    public function edituser(Request $request,$id)
    {
        $users = User::where('id',$id)->first();
        return view('update',['users'=>$users]);    
    }
    public function updateuser(Request $request,$id)
    {
        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|min:11|unique:users,email',
            'password' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
        ]);
        
        $users = User::where('id',$id)->first();
        $users->f_name = $request->f_name;
        $users->l_name = $request->l_name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->date_of_birth = $request->date_of_birth;
        if (isset($request->gender)) {
            if($request->gender == 'Custom'){
                if(isset($request->gender_2)){
                    $users->gender = $request->gender_2;    
                }else{
                    $users->gender = $request->gender_3;
                }
                
            }else{
                $users->gender = $request->gender;
            }
            
            
        }
        $users->save();

        return redirect()->route('show.users');
    }
    public function usersRegistration()
    {
        return view('registration');
    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = $request->only('email', 'password');
        if(Auth::attempt($user))
        {
            return redirect()->intended('user-dashboard')->withseccess('Log In...');
        }
        return redirect()->back()->withseccess('Login details are not valid');
    }
    public function userDashboard()
    {
        if(Auth::check())
        {
            {
                $userdata = AddParrot::latest()->get();
                return view('dashboard',['usersdata'=>$userdata]);
            }
        return view('dashboard');
        }
        return redirect("login.user")->withSuccess('You are not allowed to access');
    }
    public function userSignout(){
        Session::flush();
        Auth::logout();

        return redirect()->route('login.user');
    }
    

}
