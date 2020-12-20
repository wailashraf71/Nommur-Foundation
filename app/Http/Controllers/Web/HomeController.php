<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('web.index');
    }
    public function donate()
    {
        return view('web.donate');
    }
    public function about()
    {
        return view('web.about');
    }
    public function ourCases()
    {
        return view('web.our-cases');
    }
    public function contact()
    {
        return view('web.contact');
    }
}
