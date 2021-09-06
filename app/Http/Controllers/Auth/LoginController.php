<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //goi trang dang nhap//
    public function getLogin() {
        return view('auth/login');
    }

    public function postLogin(Request $request) {
        // Kiểm tra dữ liệu nhập vào
        $rules = [
            'email' =>'required|email',
            'password' => 'required|min:6'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        
        
        if ($validator->fails()) {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
            return redirect('login')->withErrors($validator)->withInput();
        } else {
            // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
            $email = $request->input('email');
            $password = $request->input('password');
     
            if( Auth::attempt(['email' => $email, 'password' =>$password])) {
                // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
                return redirect('/');
            } else {
                // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
                Session::flash('error', 'Email hoặc mật khẩu không đúng!');
                return redirect('login');
            }
        }
    }
   
}
