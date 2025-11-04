<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user/skills/index', [
            'skills' => Skill::where('user_id', Auth::id())->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user/skills/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_skill' => 'required|max:50',
            'first_rate' => 'required|max:50',
            'second_skill' => 'required|max:50',
            'second_rate' => 'required|max:50',
            'third_skill' => 'required|max:50',
            'third_rate' => 'required|max:50',
            'fourth_skill' => 'required|max:50',
            'fourth_rate' => 'required|max:50',
            'fifth_skill' => 'required|max:50',
            'fifth_rate' => 'required|max:50'
        ]);
        // 'user_id' => Auth::id(),
        $userId = Auth::id();
        $validatedData['user_id'] = $userId;

        Skill::create($validatedData);
        return redirect('user/skills')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        return view('user/skills/show', [
            'skill' => $skill
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        return view('user/skills/edit', [
            'skill' => $skill,
            Gate::authorize('skills', $skill)
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $rules = [
            'first_skill' => 'required|max:50',
            'first_rate' => 'required|max:50',
            'second_skill' => 'required|max:50',
            'second_rate' => 'required|max:50',
            'third_skill' => 'required|max:50',
            'third_rate' => 'required|max:50',
            'fourth_skill' => 'required|max:50',
            'fourth_rate' => 'required|max:50',
            'fifth_skill' => 'required|max:50',
            'fifth_rate' => 'required|max:50'
        ];

        $validatedData = $request->validate($rules);
        Skill::where('id', $skill->id)->update($validatedData);
        return redirect('user/skills')->with('update', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        Skill::destroy($skill->id);
        return redirect('/user/skills')->with('success', 'Data berhasil dihapus');
    }
}
