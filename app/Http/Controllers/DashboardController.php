<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class DashboardController extends Controller
{
    // Dashboard view Page

      public function dashboard(): View{
        return view('pages.dashboard');
    }

}
