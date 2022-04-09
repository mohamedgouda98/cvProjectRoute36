<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillCategoryRequest;
use App\Models\SkillCategory;
use Illuminate\Http\Request;

class SkillCategoryController extends Controller
{
    public function create()
    {
        return view('Admin.skillCategory.create');
    }

    public function store(SkillCategoryRequest $request)
    {
        SkillCategory::create([
            'name' => $request->name
        ]);
        return redirect()->back();
    }
}
