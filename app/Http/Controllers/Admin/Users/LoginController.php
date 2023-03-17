<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.users.login',[
            'title' => 'Đăng nhập hệ thống'
        ]);
    }   
    
    public function store(Request $request) // Request $request nhận toàn bộ thông tin từ form gửi lên
    {
        // dd($request->input());
        $this->validate($request, [
            'email' =>'required|email:filter', // Kh được trống | Đúng định dạng Email
            'password' =>'required',
        ]);

        // Nếu đăng nhập thành công
        if (Auth::attempt([
                'email' => $request->input('email'), 
                'password' => $request->input('password')
            ], $request->input('remember')))  {

            return redirect()->route('admin'); //Chuyển sang trang Admin
        }
        //Flash
        Session::flash('error', 'Email hoặc Password không đúng');
        
        // Ngược lại
        return redirect()->back();
    }
}