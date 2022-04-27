<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\portfolio;
use App\Models\portfolioCategory;
use App\Models\Profile;
use App\Models\Service;
use App\Models\Skill;
use App\Models\SkillCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $skillsCategories = SkillCategory::with('skills')->get();
        $services = Service::get();
        $portfolioCategories = portfolioCategory::get();
        $portfolios = portfolio::with('category')->get();

        return view('index', compact(['about',
            'skillsCategories',
            'services',
            'portfolioCategories',
            'portfolios'
            ]));
    }
}
