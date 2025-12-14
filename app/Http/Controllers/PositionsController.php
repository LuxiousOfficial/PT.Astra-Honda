<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PositionsController extends Controller
{
    public function index()
    {
        return view('user/history/index', [
            'positions' => Position::where('user_id', Auth::id())->get()
        ]);
    }
}
