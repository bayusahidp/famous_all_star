<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }

    public function showChangePasswordForm() {
        return view('auth.changepassword');
    }
         
    public function changePassword(Request $request){
         
        if (!(Hash::check($request->current_password, Auth::user()->password))) {
        // The passwords matches
        return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
         
        if(strcmp($request->current_password, $request->new_password) == 0){
        //Current password and new password are same
        return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        if(!(strcmp($request->new_password, $request->new_password_confirm)) == 0){
                    //New password and confirm password are not same
                    return redirect()->back()->with("error","New Password should be same as your confirmed password. Please retype new password.");
        }
        //Change Password
        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();
         
        return redirect()->route('admin.index')->with("success","Password changed successfully !");
         
        }
}
