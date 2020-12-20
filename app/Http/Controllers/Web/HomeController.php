<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Throwable;

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

    public function donatePost(Request $request)
    {
        try {
            $donation = new Donation();
            $donation->name = $request->name;
            $donation->phone = $request->phone;
            $donation->address = $request->address;
            $donation->message = $request->message;
            $donation->save();
            return redirect()->back()->with('message', 'Donation info sent successfully');
        } catch (Throwable $e) {
            return redirect()->back()->with('error', 'Donation process failed, please check your data.');
        }
    }
}
