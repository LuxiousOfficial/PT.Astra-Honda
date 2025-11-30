<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $profiles = Profile::where('user_id', Auth::id())->get();
        // return Profile::where('user_id', auth()->user()->id)->get();
        return view('user/profile/index', [
            'profiles' => Profile::where('user_id', Auth::id())->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user/profile/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|email:dns|unique:profiles',
            'nik' => 'required|unique:profiles',
            'gender' => 'required|',
            'place_of_birth' => 'required|max:200',
            'date_of_birth' => 'required',
            'address' => 'required|max:200',
            'phone_number' => 'required|max:13',
            'religion' => 'required',
            'status' => 'required'
        ]);
        // 'user_id' => Auth::id(),
        $userId = Auth::id();
        $validatedData['user_id'] = $userId;

        Profile::create($validatedData);
        return redirect('user/profile')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        return view('user/profile/show', [
            'profile' => $profile
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        return view('user/profile/edit', [
            'profile' => $profile,
            Gate::authorize('profile', $profile)
        ]);
        // if(!Gate::allows('profile', $profile)) {
        //     abort(403);
        // }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        $rules = [
            'name' => 'required|max:200',
            'gender' => 'required|',
            'place_of_birth' => 'required|max:200',
            'date_of_birth' => 'required',
            'address' => 'required|max:200',
            'phone_number' => 'required|max:13',
            'religion' => 'required',
            'status' => 'required'
        ];

        if($request->email != $profile->email) {
            $rules['email'] = 'required|email:dns|unique:profiles';
        }

        if($request->nik != $profile->nik) {
            $rules['nik'] = 'required|unique:profiles';

        }

        $validatedData = $request->validate($rules);
        Profile::where('id', $profile->id)->update($validatedData);
        return redirect('user/profile')->with('update', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        Gate::authorize('developer', $profile);
        Profile::destroy($profile->id);
        return redirect('/user/profile')->with('success', 'Data berhasil dihapus');
    }
}
