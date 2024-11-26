<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;

class LeadsController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->query('status');
        $leads = Lead::when($status, function ($query) use ($status) {
            return $query->where('status', $status);
        })->get();

        return response()->json($leads);
    }
}
