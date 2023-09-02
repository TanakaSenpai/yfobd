<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function projects()
    {
        return view('projects.projects');
    }

    public function see_project($project)
    {
        $img = $project;
        if ($project == 'climate change') {
            $img = 'climate-change';
        } else if ($project == 'culture & sports') {
            $img = 'culture-sports';
        }
        return view('projects.see-project', ['project' => $project, 'img' => $img]);
    }
}
