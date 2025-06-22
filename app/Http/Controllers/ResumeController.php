<?php

namespace App\Http\Controllers;

use App\DataObjects\Resume;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    public function index()
    {
        $resume = Cache::remember('resume_data', now()->addDay(), function () {
            $resume = Storage::disk('resumes')->get('resume.json');
            $resumeData = json_decode($resume, true);

            return Resume::fromArray($resumeData);
        });

        return view('resume', ['resume' => $resume, 'allowDownload' => true]);
    }

    public function download()
    {
        $resume = Cache::remember('resume_data', now()->addDay(), function () {
            $resume = Storage::disk('resumes')->get('resume.json');
            $resumeData = json_decode($resume, true);

            return Resume::fromArray($resumeData);
        });

        $pdf = Pdf::loadView('resume', ['resume' => $resume, 'allowDownload' => true]);

        return $pdf->download($resume->basics->name . ' Resume.pdf');
    }
}
