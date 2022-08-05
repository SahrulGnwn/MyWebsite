<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExternalAPIController extends Controller
{
    public function covid (Request $request) {
        $response = Http::get('https://data.covid19.go.id/public/api/update.json');
        $data = $response->json();
        return dd($data);
        return view('dashboard.external.covid', compact('data'));
    }
}
