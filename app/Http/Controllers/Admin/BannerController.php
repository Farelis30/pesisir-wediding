<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        return view('admin.banner.index');
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function edit($id)
    {
        return view('admin.banner.edit', ['bannerId' => $id]);
    }

    public function show($id)
    {
        $banner = Banner::findOrFail($id);

        return view('admin.banner.show', compact('banner'));
    }
}
