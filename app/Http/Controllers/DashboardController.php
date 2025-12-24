<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Karir;
use App\Models\Dealer;
use App\Models\Kredit;
use App\Models\Pelamar;
use App\Models\Position;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(User $user)
    {
        return view('/dashboardhrdastrahonda/index', [
            'creadits' => Kredit::count(),
            'services' => Service::count(),
            'dealers' => Dealer::count(),
            'careers' => Karir::count(),
            'users' => User::count(),
            'positions' => Position::count(),
            'kredits' => Kredit::latest('id')->get()
        ]);
    }
}
