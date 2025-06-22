<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Services\ResumeService;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\View\View;

class ResumeController extends Controller
{
    public function __construct(private readonly ResumeService $resumeService)
    {
    }

    public function index(): View
    {
        return view('resume', ['resume' => $this->resumeService->getResume(), 'allowDownload' => true]);
    }

    public function download(): Response
    {
        $resume = $this->resumeService->getResume();

        $pdf = Pdf::loadView('resume', ['resume' => $resume, 'allowDownload' => true]);

        return $pdf->download($resume->basics->name . ' Resume.pdf');
    }
}
