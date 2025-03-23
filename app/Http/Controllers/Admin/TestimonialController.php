<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        return view('admin.testimonial.index');
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function edit($id)
    {
        return view('admin.testimonial.edit', ['testimonialId' => $id]);
    }

    public function show($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.testimonial.show', compact('testimonial'));
    }
}
