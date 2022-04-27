<?php

namespace App\Http\Controllers;
use App\Models\portfolio;
use App\Models\portfolioCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class portfolioController extends Controller
{
    public function index() {
        $portfolio = portfolio::get();
        return view('admin.portfolio.index',compact('portfolio'));
    }

    public function create() {
        $portfolioCategories = portfolioCategory::get();
        return view('admin.portfolio.create',compact('portfolioCategories'));
    }

    public function store(Request $request) {

        portfolio::create([
            'title' => $request->title,
            'image' => $request->image,
            'tags' => $request->title,
            'portfolio_category_id' => $request->portfolio_category_id,

        ]);
        return redirect()->back();
    }
    public function edit($id) {

        $portfolioList = portfolio::find($id);
        $portfolioCategories = portfolioCategory::get();
        return view('admin.portfolio.edit',compact('portfolioCategories','portfolioList'));
    }
    public function update(Request $request) {

        $portfolio = portfolio::find($request->id);
        $portfolio->update([
            'title' => $request->title,
            'image' => $request->image,
            'tags' => $request->tags,
            'portfolio_category_id' => $request->portfolio_category_id
        ]);

        return redirect()->back();
    }

}
