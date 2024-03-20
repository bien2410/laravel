<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

;

class RegisterController extends Controller
{
    public function index()
    {
        return view("admin/register");
    }

    public function register(Request $request)
    {

        $rules = [
            "username" => "bail|required|min:6",
            "email" => "bail|required|email",
            "password" => "bail|required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/|confirmed",
            "password_confirmation" => "required"
        ];
        $messages = [
            // "password.confirmed" => "Password confirmation does not match.",
            "password.regex" => "Passwords include uppercase, lowercase, numbers, and special characters."
        ];

        $request->validate($rules, $messages); // tự động tạo ra 1 mảng error chứa lỗi validate

        // check user da ton tai hay chua
        $user = User::where("username", $request->username)->first();
        if($user!=null){
            echo "<script>alert('Người dùng đã tồn tại')
            window.location.href = '/frontend'
            </script>";
        }


        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $hashPassword = password_hash($request->password, PASSWORD_DEFAULT);
        $user->password = $hashPassword;
        $user->role = "User";

        if ($user->save()) {
            echo "<script>alert('Đăng ký tài khoản thành công')
            window.location.href = '/frontend'
            </script>";


        } else {
            echo "<script>alert('Đăng ký tài khoản không thành công')</script>";
        }
    }
}