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
        $data_nganh = DB::table('nganh')->get(); 
        $data_gv = DB::table('giang_vien')->get(); 
        return view('welcome',['data_nganh' => $data_nganh, 'data_gv' => $data_gv]);
    }
    public function show_list(Request $request,$id){
        $data_nganh = DB::table('nganh')->get();
        $data_gv = DB::table('giang_vien')->get();
        if ($id == 0){ //Tìm kiếm theo search bar
            $id_nganh = $request->input('major');
            $id_gv = $request->input('teacher');
            $name = $request->input('searchName');
            if ($id_nganh == "0" && $id_gv == "0"){ //Chỉ tìm theo tên
                $data = DB::table('de_tai')->where('ten_dt', 'like', '%' . $name . '%')->get();
            } 
            else{
                if ($id_nganh != "0" && $id_gv != "0"){
                    $data = DB::table('de_tai')->where('id_nganh', $id_nganh)
                    ->where('id_gv', $id_gv)
                    ->get();
                }
                else if ($id_nganh != "0"){ 
                    $data = DB::table('de_tai')->where('id_nganh',$id_nganh)->get();
                } else if($id_gv != "0"){
                    $data = DB::table('de_tai')->where('id_gv',$id_gv)->get();
                }
            }
        } 
        else{ //Tìm kiếm bằng cách click nghành
            $data = DB::table('de_tai')->where('id_nganh',$id)->get();
        }
        return view('majors.list',['data'=> $data,
                                'data_nganh'=>$data_nganh,
                                'data_gv' => $data_gv]);
    }
    public function login(){
        return view('login');
    }
    public function check_login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // dd(Session::all());
            return redirect('/')->with('sweetAlert', 'Login sucess');
        } 
        else{
            return redirect('/login')->with('fail', 'Login failed');
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
    public function search_list(Request $request){
        $id = $request->input('major');
        $name = $request->input('searchName');
        if ($id == "0"){
            $data = DB::table('de_tai')
                    ->where('ten_dt', 'like', '%' . $name . '%')
                    ->get();
                    dd($data);
            return view('majors.list',['data'=> $data ]);
        }
        return view('majors.list');
    }
    public function change_password($id, Request $request) {
        $newPassword = Hash::make($request->input('newPassword'));
        DB::table('users')
            ->where('id', $id)
            ->update(['password' => $newPassword]);
        return view('login');
    }
}
