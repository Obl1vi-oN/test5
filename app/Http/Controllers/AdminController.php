<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdminPage()
    {
        return view('admin');
    }

    public function index()
    {
        $users = User::all();
        return view('admin', ['users' => $users]);
    }

    public function showMessage()
    {
        $messages = User::where('mark', '=', 'offensive')->get();
        return view('message', ['messages' => $messages]);
    }
}
