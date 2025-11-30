<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Karir;
use App\Models\Dealer;
use App\Models\Kredit;
use App\Models\Search;
use App\Models\Pelamar;
use App\Models\Service;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class SearchController extends Controller
{
    public function search(Request $request) {
        if($request->has('search')) {
            $search = Search::where('slug','LIKE', '%' .$request->search. '%')->get();
        }
        else{
            $search = Search::all();
        }

        return view('/search', ['searches' => Search::filter(request(['search']))->latest('id')->paginate(12)->withQueryString()]);
    }

    public function service(Request $request) {
        if($request->has('search')) {
            $search = Service::where('nama','LIKE', '%' .$request->search. '%')
            ->orWhere('provinsi','LIKE', '%' .$request->search. '%')->get();
        }
        else{
            $search = Service::latest('id')->get();
        }

        return view('/dashboardhrdastrahonda/service/index', ['services' => Service::latest('id')->filter(request(['search']))->paginate(10)
        ->withQueryString()]);
    }

    public function kredit(Request $request) {
        if($request->has('search')) {
            $search = Kredit::where('nama','LIKE', '%' .$request->search. '%')
            ->orWhere('provinsi','LIKE', '%' .$request->search. '%')->get();
        }
        else{
            $search = Kredit::latest('id')->get();
        }

        return view('/dashboardhrdastrahonda/kredit/index', ['kredits' => Kredit::latest('id')->filter(request(['search']))->paginate(10)
        ->withQueryString()]);
    }

    public function karir(Request $request) {
        if($request->has('search')) {
            $search = Karir::where('jabatan','LIKE', '%' .$request->search. '%')->get();
        }
        else{
            $search = Karir::latest('id')->get();
        }

        return view('/dashboardhrdastrahonda/karir/index', ['karirs' => Karir::latest('id')->filter(request(['search']))->paginate(10)
        ->withQueryString()]);
    }

    public function dealer(Request $request) {
        if($request->has('search')) {
            $search = Dealer::where('nama','LIKE', '%' .$request->search. '%')
            ->orWhere('alamat','LIKE', '%' .$request->search. '%')->get();
        }
        else{
            $search = Dealer::latest('id')->get();
        }

        return view('/dashboardhrdastrahonda/dealer/index', ['dealers' => Dealer::latest('id')->filter(request(['search']))->paginate(10)
        ->withQueryString()]);
    }

    public function user(Request $request) {
        if($request->has('search')) {
            $search = User::where('name','LIKE', '%' .$request->search. '%')
            ->orWhere('email','LIKE', '%' .$request->search. '%')->get();
        }
        else{
            $search = User::latest('id')->get();
        }

        return view('/dashboardhrdastrahonda/user/index', ['users' => User::latest('id')->filter(request(['search']))->paginate(20)
        ->withQueryString()]);
    }

    public function candidates(Request $request) {
        if($request->has('search')) {
            $search = Position::where('office','LIKE', '%' .$request->search. '%');
        }
        else{
            $search = Position::latest('id')->get();
        }

        return view('/dashboardhrdastrahonda/position/index', ['positions' => Position::latest('id')->filter(request(['search']))->paginate(20)
        ->withQueryString()]);
    }
}