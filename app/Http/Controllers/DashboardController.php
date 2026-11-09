<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Project;
use App\Models\User;

class DashboardController extends Controller
{
    function index(Request $request) {
        if(request()->user()->role === 'mahasiswa') {
            $projects = Project::where('user_id', auth()->id())->get();
            return view('mahasiswa.dashboard', ['projects' => $projects]);
        } else if (request()->user()->role === 'dosen') {
            return view('dosen.dashboard');
        }
        abort(403);
    }
}
