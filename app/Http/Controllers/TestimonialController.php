<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;


class TestimonialController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => ['required','string','max:60'],
            'country' => ['nullable','string','max:60'],
            'rating'  => ['required','integer','min:1','max:5'],
            'message' => ['required','string','min:10','max:500'],
        ]);

        Testimonial::create($data + ['is_approved' => true]);

        return back()->with('ok', __("Alert"));
    }
}
