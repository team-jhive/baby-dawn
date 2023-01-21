<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BabyRecordController extends Controller
{
    public function index()
    {
        return view('admin.baby-records.index');
    }

    public function search(Request $request)
    {
        return view('admin.baby-records.search');
    }


    public function create()
    {
        return view('admin.baby-records.create');
    }
}
