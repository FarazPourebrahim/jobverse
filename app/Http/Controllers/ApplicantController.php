<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function store(Request $request, Job $job): RedirectResponse {

        $sxistingApplication = Applicant::where('job_id', $job->id)->where('user_id', auth()->id())->exists();
        if ($sxistingApplication) {
            return redirect()->back()->with('error', 'You have already applied for this job');
        }

        $validatedData = $request->validate([
           'full_name' => 'required|string|max:255',
            'contact_phone' => 'string',
            'contact_email' => 'required|string|email',
            'message' => 'string',
            'location' => 'string',
            'resume' => 'required|file|mimes:pdf|max:2048',
        ]);

        if ($request->hasFile('resume')) {
            $path = $request->file('resume')->store('resumes', 'public');
            $validatedData['resume_path'] = $path;
        }

        $application = new Applicant($validatedData);
        $application->job_id = $job->id;
        $application->user_id = auth()->id();
        $application->save();

        return redirect()->back()->with('success', 'Your application has been submitted!');
    }

    public function destroy(Request $request, Applicant $applicant): RedirectResponse
    {
        if ($applicant->user->id === auth()->id()) {

            if ($applicant->resume) {
                Storage::delete('public/resumes/' . $applicant->resume);
            }

            $applicant->delete();
            return redirect()->route('dashboard')->with('success', 'Applicant has been deleted successfully!');
        }

        return redirect()->route('dashboard')->with('error', 'You are not allowed to delete this applicant!');
    }
}
