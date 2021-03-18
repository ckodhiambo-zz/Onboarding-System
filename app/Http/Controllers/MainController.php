<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login()
    {
        return view('auth.login');

    }
    function register()
    {
        return view('auth.register');
    }
    function save(Request $request)
    {
       //Validate our requests
        $request->validate([

            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:8|max:16'
        ]);

        //insert data into database
        $admin = new Admin;
        $admin ->name = $request -> name;
        $admin ->email = $request -> email;
        $admin ->password = Hash:: make($request -> password);
        $save = $admin -> save();

        //Display error message if data is not inserted into database
        if($save){
            return back()->with('success','New user has been successfully registered!');

        }else{
            return back() -> with('fail','Something went wrong! Please try again later.');

        }

    }

    function check(Request $request)
    {
        //Validate requests
        $request -> validate([
           'email' => 'required|email',
           'password' => 'required|min:8|max:16'

        ]);


        if(auth()->attempt(request(['email','password']))){
            return redirect('employees');
        }
        else{
            return back() -> with('fail','Incorrect email or password! Please try again.');
        }

        /*
        //Get user info from the db
        $userInfo = Admin::where('email', '=' , $request -> email) -> first();//query to fetch user with requedted email from DB

        //Success and error message depending on the fetch results
        if (!$userInfo){
            return back() -> with('fail','Wrong email address!Please try again.');
        }else{
            //check if password is correct
            if(Hash::check($request -> password, $userInfo -> password)){
                $request -> session() -> put('Logged User', $userInfo ->id);
                return redirect('/admin/dashboard');

            }else{
                return back() -> with('fail','Incorrect password! Please try again.');
            }
        }*/
    }
    function logout(){

        auth()->logout();

        return redirect('/auth/login');

    }

    function dashboard()
    {
        //Pass log user info on view
        //Fetch data from DB

        $data = ['email' => auth()->user()->email,'name' => auth()->user()->name];


        return view('admin.dashboard', compact('data'));
    }

}
