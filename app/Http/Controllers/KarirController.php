<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class KarirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Karir $karir)
    {
        Gate::authorize('admin', $karir);
        return view('dashboardhrdastrahonda.karir.index', [
            'karirs' => Karir::latest('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboardhrdastrahonda.karir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'slug' => 'required|max:100',
            'jabatan' => 'required|max:100',
            'jeniskelamin' => 'required',
            'pendidikan' => 'required|max:100',
            'pengalaman' => 'required|max:200',
            'keahlian' => 'required',
            'kerjasama' => 'required|max:100',
            'vaksin' => 'required|max:50',
            'lokasi' => 'required|max:150',
            'link' => 'required|max:200'
        ]);

        Karir::create($validatedData);
        return redirect('/dashboardhrdastrahonda/karir')->with('success', 'Data telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karir $karir)
    {
        Gate::authorize('admin', $karir);
        return view('dashboardhrdastrahonda.karir.show', [
            'karir' => $karir
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karir $karir)
    {
        Gate::authorize('admin', $karir);
        return view('dashboardhrdastrahonda.karir.edit', [
            'karir' => $karir
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karir $karir)
    {
        Gate::authorize('admin', $karir);
        $rules = [
            'slug' => 'required|max:100',
            'jabatan' => 'required|max:100',
            'jeniskelamin' => 'required',
            'pendidikan' => 'required|max:100',
            'pengalaman' => 'required|max:200',
            'keahlian' => 'required',
            'kerjasama' => 'required|max:100',
            'vaksin' => 'required|max:50',
            'lokasi' => 'required|max:150',
            'link' => 'required|max:200'
        ];

        $validatedData = $request->validate($rules);

        Karir::where('id', $karir->id)->update($validatedData);
        return redirect('/dashboardhrdastrahonda/karir')->with('update', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karir $karir)
    {
        Gate::authorize('admin', $karir);
        Karir::destroy($karir->id);
        return redirect('/dashboardhrdastrahonda/karir')->with('success', 'Data berhasil dihapus');
    }
}
