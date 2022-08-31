<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User_model;
use Session;

class LoginController extends Controller
{
    // Main page
    public function index()
    {
        $site = DB::table('konfigurasi')->first();
        $data = array(  'title'     => 'Login Administrator',
                        'site'      => $site);
        return view('login/index',$data);
    }

    // login
    public function login(Request $request)
    {
        $username   = $request->input('login_username');
        $password   = $request->input('login_password');
        $model      = new User_model();
        $user       = $model->login($username,$password);
        if($user) {
            $request->session()->put('silat_login', True);
            $request->session()->put('silat_id_user', $user->ID);
            $request->session()->put('silat_nama', $user->NAMA);
            $request->session()->put('silat_username', $user->USERNAME);
            $request->session()->put('silat_akses_level', $user->ID_ROLE);

            Auth::loginUsingId(1, $remember = true);
            
            return redirect('portal')->with(['sukses' => 'Anda berhasil login']);
        }else{
            return redirect('portal')->with(['warning' => $username."-".$password]);
        }
    }

    // validasi
    public function check(Request $request)
    {
        // 
    }

    // Homepage
    public function logout()
    {
        Session()->forget('silat_login');
        Session()->forget('silat_id_user');
        Session()->forget('silat_nama');
        Session()->forget('silat_username');
        Session()->forget('silat_akses_level');

        Auth::logout();

        return redirect('portal')->with(['sukses' => 'Anda berhasil logout']);
    }
}