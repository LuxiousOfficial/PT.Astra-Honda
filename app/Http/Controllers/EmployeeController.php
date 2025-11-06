<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Skill;
use App\Models\Profile;
use App\Models\Position;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function index()
    {   
        return view('user/index', [
            'profiles' => Profile::where('user_id', Auth::id())->get(),
            'educations' => Education::where('user_id', Auth::id())->get(),
            'experiences' => Experience::where('user_id', Auth::id())->get(),
            'skills' => Skill::where('user_id', Auth::id())->get(),
            'positions' => Position::where('user_id', Auth::id())->get()
        ]);
    }
}
