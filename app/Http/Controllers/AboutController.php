<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    public function edit()
    {
        $about = About::first();
        return view('Admin.about.edit', compact('about'));
    }

    public function update(Request $request)
    {
        $about = About::first();
        $about->update([
            'name' => $request->name,
            'title' => $request->title,
            'from' => $request->from,
            'body' => $request->body,
            'lives_in' => $request->lives_in,
            'age' => $request->age,
            'gender' => $request->gender,
        ]);
        Session::flash('done', 'About Was Updated');
        return back();
    }
}
