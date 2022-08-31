<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User_model extends Model
{
    // kategori
    public function login($username,$password)
    {
        $query = DB::table('tbl_users')
            ->select('*')
            ->where(array(  'tbl_users.username'	=> $username,
                            'tbl_users.password'    => MD5($password)))
            ->orderBy('id','DESC')
            ->first();
        return $query;
    }
}
