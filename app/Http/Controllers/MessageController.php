<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function show()
    {
        return view('index');
    }

    public function index()
    {
        $messages = Message::all();
        return view('index', ['messages' => $messages]);
    }
    public function store(request $request)
    {
        Message::create([
            'user_id' => Auth::id(),
            'message' => $request -> message,
        ]);

        return redirect()->back()->with('message', 'Message sent!');
    }
}
