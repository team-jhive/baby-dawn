<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        // dd('here');
        return view('admin.index');
    }

    // public function __invoke()
    // {
    //     // dd('here');
    //     return view('admin.baby-records.search');
    // }


}
