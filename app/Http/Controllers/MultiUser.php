<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MultiUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (empty(Auth::user()) || Auth::user()->role == 'pelanggan') {
            return redirect()->route('homePage');
        } else {
            return redirect()->route('dashboard');
        }
    }
}
