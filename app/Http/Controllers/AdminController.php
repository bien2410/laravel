<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin/layouts/app");
    }

    public function categoryManager()
    {
        return view("admin/QuanLyDanhMuc");
    }
}