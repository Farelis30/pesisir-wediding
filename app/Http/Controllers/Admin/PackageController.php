<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        return view('admin.package.index');
    }

    public function create()
    {
        return view('admin.package.create');
    }

    public function edit($id)
    {
        return view('admin.package.edit', ['packageId' => $id]);
    }

    public function show($id)
    {
        $package = Package::findOrFail($id);

        return view('admin.package.show', compact('package'));
    }
}
