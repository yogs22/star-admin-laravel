<?php

namespace App\Modules\Dashboard\Http\Controllers;

use Illuminate\Routing\Controller;

class DashboardController extends Controller
{

    public function index()
    {
        return view('dashboard::index');
    }

    public function page($dir, $page)
    {
        return view('dashboard::pages.'.$dir.'.'.$page);
    }


}
