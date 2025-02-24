<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ApplicationController extends Controller
{
    public function index(): View {
        $user = Auth::user();
        $job_ids = Applicant::all()->where("user_id", $user->id)->pluck('job_id')->toArray();
        $jobs = Job::all()->whereIn('id', $job_ids);

        return view('application.index', compact('jobs'));
    }
}
