<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Service;
use App\Models\Category;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $categories = Category::all();
        $skills = Skill::all();
        $services = Service::all();
        $infos= Info::all();
        $experiences = Experience::all();
        $educations = Education::all();

        return view('index', compact('projects', 'categories', 'skills', 'services', 'infos', 'experiences', 'educations'));
    }


    public function show ($id){
        $project= Project::findOrFail($id);
        return view('show', compact('project'));
    }


    public function sidebar(){
       $me= Info::find(1);
       return view('main', compact('me'));
}
}
