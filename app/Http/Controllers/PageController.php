<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;


class PageController extends Controller
{
    public function home()
    {
        $testimonials = Testimonial::query()
            ->where('is_approved', true)
            ->latest()
            ->take(12)
            ->get();

        return view('pages.home', compact('testimonials'));
    }
}
