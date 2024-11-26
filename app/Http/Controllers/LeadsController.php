<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Response;

class LeadsController extends Controller
{

    public function showLeadsPage()
    {
         $leads = Lead::all();
         return view('leads.index', compact('leads'));
    }

    public function exportPdf(Request $request)
    {
        $status = $request->query('status');
        $leads = Lead::when($status, function ($query) use ($status) {
            return $query->where('status', $status);
        })->get();

        $pdf = PDF::loadView('leads.pdf', compact('leads'));
        $pdfContent = $pdf->output();

        return Response::make($pdfContent, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="leads.pdf"',
        ]);

    }
}
