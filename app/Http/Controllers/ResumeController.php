<?php

namespace App\Http\Controllers;

use App\DataObjects\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    public function index()
    {
        $resume = Storage::disk('resumes')->get('resume.json');
        $resumeData = json_decode($resume, true);

        return view('resume', ['resume' => Resume::fromArray($resumeData), 'allowDownload' => true]);
    }
}
