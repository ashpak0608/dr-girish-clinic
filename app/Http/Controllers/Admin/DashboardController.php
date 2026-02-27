<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalInquiries = Inquiry::count();
        $unreadInquiries = Inquiry::where('status', 0)->count();
        $recentInquiries = Inquiry::latest()->take(5)->get();
        
        return view('admin.dashboard', compact('totalInquiries', 'unreadInquiries', 'recentInquiries'));
    }
}