<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user/experience/index', [
            'experiences' => Experience::where('user_id', Auth::id())->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user/experience/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'company' => 'required|max:200',
            'position' => 'required|max:100',
            'entry_year' => 'required|max:15',
            'year_stopped' => 'required|max:15',
            'salary' => 'required|max:20',
            'industry' => 'required|max:50',
            'facility' => 'required|max:100',
            'reason_to_stop' => 'required|max:500'
        ]);
        // 'user_id' => Auth::id(),
        $userId = Auth::id();
        $validatedData['user_id'] = $userId;

        Experience::create($validatedData);
        return redirect('user/experience')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        return view('user/experience/show', [
            'experience' => $experience
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        return view('user/experience/edit', [
            'experience' => $experience,
            Gate::authorize('experience', $experience)
        ]); 
        // if(!Gate::allows('profile', $profile)) {
        //     abort(403);
        // }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $rules = [
            'company' => 'required|max:200',
            'position' => 'required|max:100',
            'entry_year' => 'required|max:15',
            'year_stopped' => 'required|max:15',
            'salary' => 'required|max:20',
            'industry' => 'required|max:50',
            'facility' => 'required|max:100',
            'reason_to_stop' => 'required|max:500'
        ];

        $validatedData = $request->validate($rules);
        Experience::where('id', $experience->id)->update($validatedData);
        return redirect('user/experience')->with('update', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        Experience::destroy($experience->id);
        return redirect('/user/experience')->with('success', 'Data berhasil dihapus');
    }
}
