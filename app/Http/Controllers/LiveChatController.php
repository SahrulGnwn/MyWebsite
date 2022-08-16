<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Events\Message;
use App\Models\LiveChatHistory;

class LiveChatController extends Controller
{
    public function index()
    {
        $history = LiveChatHistory::orderBy('id', 'DESC')->paginate(8);
        return view('livechat.index', ['history' => $history]);
    }

    public function post(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'message' => 'required'
        ]);

        $message = [
            'name' => $request->name,
            'message' => $request->message,
        ];
        LiveChatHistory::Create($message);
        event(
            new Message($message)
        );
    }
}
