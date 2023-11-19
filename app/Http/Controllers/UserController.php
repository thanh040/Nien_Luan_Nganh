<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;    
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = DB::table('nganh')->get(); //Query builder 
        return view('welcome',['data' => $data]);
    }

    public function check_login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            dd(Session::all());
            return redirect('/'); // Chuyển hướng sau khi đăng nhập thành công
        } 
        else{
            return redirect('about')->with('fail', 'Login failed');
        }
    }
    public function check_register(Request $request)
    {
        
        // $this->validate($request, [
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/login')->with('sweetAlert', 'success');
    }
    public function change_password($id, Request $request) {
        $user = User::find($id);
        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        return response()->json(['message' => 'Password changed successfully'], 200);
    }
}
