<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHelloController extends Controller
{
    public function welcome()
    {
        return view('admin/welcome');
    }
}
