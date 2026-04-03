<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){

    $projects = project::with('type')->get();

    return response()->json([
        "success" => true,
        "data" => $projects
    ]);
    }
}
