<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user/education/index', [
            'educations' => Education::where('user_id', Auth::id())->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user/education/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'university' => 'required|max:200',
            'faculty' => 'required|max:200',
            'institution' => 'required|max:50',
            'major' => 'required|max:70',
            'entry_year' => 'required|max:15',
            'graduate' => 'required|max:15',
            'ipk' => 'required|max:7'
        ]);
        // 'user_id' => Auth::id(),
        $userId = Auth::id();
        $validatedData['user_id'] = $userId;

        Education::create($validatedData);
        return redirect('user/education')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        return view('user/education/show', [
            'education' => $education
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        return view('user/education/edit', [
            'education' => $education,
            Gate::authorize('education', $education)
        ]); 
        // if(!Gate::allows('profile', $profile)) {
        //     abort(403);
        // }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $rules = [
            'university' => 'required|max:200',
            'faculty' => 'required|max:200',
            'institution' => 'required|max:50',
            'major' => 'required|max:70',
            'entry_year' => 'required|max:15',
            'graduate' => 'required|max:15',
            'ipk' => 'required|max:7'
        ];

        $validatedData = $request->validate($rules);
        Education::where('id', $education->id)->update($validatedData);
        return redirect('user/education')->with('update', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        Education::destroy($education->id);
        return redirect('/user/education')->with('success', 'Data berhasil dihapus');
    }
}
