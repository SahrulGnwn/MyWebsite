<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('dashboard.index');
    }

    public function settingsApi()
    {
        return view('dashboard.settings.api');
    }

    public function settingsApiCreate(Request $request)
    {
        $user = Auth()->user();
        $token = $request->user()->createToken($request->token_name);
        $user->api_token = $token->plainTextToken;
        $user->api_name = $request->token_name;
        // return $user;
        $user->update();
        return redirect()->back();
    }
    public function settingsApiList()
    {
        return view('dashboard.settings.api-list');
    }
}
