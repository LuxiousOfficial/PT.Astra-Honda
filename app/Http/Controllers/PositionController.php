<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user/position/index', [
            'positions' => Position::where('user_id', Auth::id())->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user/position/create', [
            'karirs' => Karir::latest('id')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'karir_id' => 'required|max:100',
            'salary' => 'required|max:50',
            'join' => 'required|max:20'
        ]);
        // 'user_id' => Auth::id(),
        $userId = Auth::id();
        $validatedData['user_id'] = $userId;

        Position::create($validatedData);
        return redirect('user/position')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Position $position)
    {
        return view('user/position/show', [
            'position' => $position
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Position $position)
    {
        return view('user/position/edit', [
            'position' => $position,
            'karirs' => Karir::latest('id')->get(),
            Gate::authorize('position', $position)
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Position $position)
    {
        $rules = [
            'karir_id' => 'required|max:100',
            'salary' => 'required|max:50',
            'join' => 'required|max:20'
        ];

        $validatedData = $request->validate($rules);
        Position::where('id', $position->id)->update($validatedData);
        return redirect('user/position')->with('update', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position)
    {
        Position::destroy($position->id);
        return redirect('/user/position')->with('success', 'Data berhasil dihapus');
    }
}
