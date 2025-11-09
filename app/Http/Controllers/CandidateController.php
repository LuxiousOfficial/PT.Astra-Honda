<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        Gate::authorize('developer', $user);
        return view('dashboardhrdastrahonda/candidates/index', [
            'users' => User::latest('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboardhrdastrahonda/candidates/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:200',
            'is_admin' => 'required|max:5',
            'is_developer' => 'required|max:5'
        ]);

        User::create($validatedData);
        return redirect('dashboardhrdastrahonda/canidates')->with('success', 'Data yang anda kirimkan berhasil tersimpan ke dalam database kami, Terima Kasih...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        Gate::authorize('developer', $user);
        return view('dashboardhrdastrahonda.candidates.show', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        Gate::authorize('developer', $user);
        return view('dashboardhrdastrahonda/candidates/edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        Gate::authorize('developer', $user);
        $rules = [
            'name' => 'required|max:200',
            'password' => 'required|min:8|max:200',
            'is_admin' => 'max:5',
            'is_developer' => 'max:5'
        ];

        if($request->email != $user->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }

        $validatedData = $request->validate($rules);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', $user->id)->update($validatedData);
        return redirect('/dashboardhrdastrahonda/candidates')->with('update', 'Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        Gate::authorize('developer', $user);
        User::destroy($user->id);
        return redirect('/dashboardhrdastrahonda/user')->with('success', 'Data berhasil dihapus');
    }
}
