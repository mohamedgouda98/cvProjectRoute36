<?php

namespace App\Http\Controllers;
use App\Models\portfolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class portfolioCategoryController extends Controller
{
    public function index()
    {
        $portfolioCategories = portfolioCategory::get();
        return view('Admin.portfolioCategory.index', compact('portfolioCategories'));
    }
    public function create()
    {
        return view('Admin.portfolioCategory.create');
    }

    public function store(Request $request)
    {
        portfolioCategory::create([
            'name' => $request->name,
            'data_filer_name' => $request->data_filter_name
        ]);
        return redirect()->back();
    }

    public function delete(Request $request)
    {
        $portfolioCategory = portfolioCategory::find($request->id);
        if($portfolioCategory)
        {
            $portfolioCategory->delete();
            Session::flash('done', 'portfolioCategory  Was Deleted');
            return back();
        }
        return back()->withErrors(['portfolioCategory not found']);
    }

    public function edit($id)
    {
        $portfolioCategory = portfolioCategory::find($id);
        return view('Admin.portfolioCategory.edit', compact('portfolioCategory'));
    }

    public function update(Request $request)
    {
        $portfolioCategory = portfolioCategory::find($request->id);

        $portfolioCategory->update([
            'name' => $request->name,
            'data_filer_name' => $request->data_filter_name
        ]);
        Session::flash('done', 'portfolioCategory Was Updated');
        return redirect(route('admin.portfolio.category.index'));
    }
}
