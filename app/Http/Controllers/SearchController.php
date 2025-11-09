<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Karir;
use App\Models\Dealer;
use App\Models\Kredit;
use App\Models\Search;
use App\Models\Pelamar;
use App\Models\Service;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) {
        if($request->has('search')) {
            $search = Search::where('slug','LIKE', '%' .$request->search. '%')->get();
        }
        else{
            $search = Search::all();
        }

        return view('/search', ['searches' => Search::filter(request(['search']))->latest('id')->paginate(12)]);
    }

    // public function candidates(Request $request) {
    //     if($request->has('search')) {
    //         $search = User::where('namalengkap','LIKE', '%' .$request->search. '%')
    //         ->orWhere('jabatan','LIKE', '%' .$request->search. '%')->get();
    //     }
    //     else{
    //         $search = User::latest('id')->get();
    //     }

    //     return view('/dashboardhrdastrahonda/candidates/index', ['users' => User::latest('id')->filter(request(['search']))->paginate(8)]);
    // }

    public function service(Request $request) {
        if($request->has('search')) {
            $search = Service::where('nama','LIKE', '%' .$request->search. '%')
            ->orWhere('provinsi','LIKE', '%' .$request->search. '%')->get();
        }
        else{
            $search = Service::latest('id')->get();
        }

        return view('/dashboardhrdastrahonda/service/index', ['services' => Service::latest('id')->filter(request(['search']))->paginate(8)]);
    }

    public function kredit(Request $request) {
        if($request->has('search')) {
            $search = Kredit::where('nama','LIKE', '%' .$request->search. '%')
            ->orWhere('provinsi','LIKE', '%' .$request->search. '%')->get();
        }
        else{
            $search = Kredit::latest('id')->get();
        }

        return view('/dashboardhrdastrahonda/kredit/index', ['kredits' => Kredit::latest('id')->filter(request(['search']))->paginate(8)]);
    }

    public function karir(Request $request) {
        if($request->has('search')) {
            $search = Karir::where('jabatan','LIKE', '%' .$request->search. '%')->get();
        }
        else{
            $search = Karir::latest('id')->get();
        }

        return view('/dashboardhrdastrahonda/karir/index', ['karirs' => Karir::latest('id')->filter(request(['search']))->get()]);
    }

    public function dealer(Request $request) {
        if($request->has('search')) {
            $search = Dealer::where('nama','LIKE', '%' .$request->search. '%')
            ->orWhere('alamat','LIKE', '%' .$request->search. '%')->get();
        }
        else{
            $search = Dealer::latest('id')->get();
        }

        return view('/dashboardhrdastrahonda/dealer/index', ['dealers' => Dealer::latest('id')->filter(request(['search']))->get()]);
    }

    public function user(Request $request) {
        if($request->has('search')) {
            $search = User::where('name','LIKE', '%' .$request->search. '%')
            ->orWhere('email','LIKE', '%' .$request->search. '%')->get();
        }
        else{
            $search = User::latest('id')->get();
        }

        return view('/dashboardhrdastrahonda/user/index', ['users' => User::latest('id')->filter(request(['search']))->get()]);
    }
}
