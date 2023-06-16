<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('technologies','type')->paginate(4);

        return response()->json([

            'succes' => true,
            'results' => $projects
        ]);
    }
}