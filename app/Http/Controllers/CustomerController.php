<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;


use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function cp()
    {
        $user = Auth::user();
        $merchants = User::where('user_type', 'merchant')->get();


        return view('customer.pesan', ['user' => $user], compact('merchants'));
    }
}
