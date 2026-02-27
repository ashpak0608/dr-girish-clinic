<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Setting;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('key_value', 'key_name')->toArray();
        $locations = Location::orderBy('display_order')->get();
        $orthopaedicServices = Service::orthopaedic()->take(6)->get();
        $dermatologyServices = Service::dermatology()->take(6)->get();
        $testimonials = Testimonial::where('is_approved', 1)->orderBy('display_order')->take(6)->get();
        
        return view('home', compact(
            'settings', 'locations', 'orthopaedicServices', 
            'dermatologyServices', 'testimonials'
        ));
    }

    public function about()
    {
        $settings = Setting::pluck('key_value', 'key_name')->toArray();
        return view('about', compact('settings'));
    }

    public function locations()
    {
        $settings = Setting::pluck('key_value', 'key_name')->toArray();
        $locations = Location::orderBy('display_order')->get();
        return view('locations', compact('settings', 'locations'));
    }

    public function services()
    {
        $settings = Setting::pluck('key_value', 'key_name')->toArray();
        $orthopaedicServices = Service::orthopaedic()->get();
        $dermatologyServices = Service::dermatology()->get();
        return view('services', compact('settings', 'orthopaedicServices', 'dermatologyServices'));
    }

    public function contact()
    {
        $settings = Setting::pluck('key_value', 'key_name')->toArray();
        $locations = Location::orderBy('display_order')->get();
        return view('contact', compact('settings', 'locations'));
    }

    public function bookAppointment(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'preferred_location' => 'required|string',
            'preferred_date' => 'nullable|date',
            'message' => 'nullable|string'
        ]);

        Inquiry::create($request->all());

        return redirect()->back()->with('success', 'Appointment request sent successfully! We will contact you shortly.');
    }
}