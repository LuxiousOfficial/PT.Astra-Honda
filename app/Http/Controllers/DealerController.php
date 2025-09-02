<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Dealer $dealer)
    {
        Gate::authorize('admin', $dealer);
        return view('dashboardhrdastrahonda.dealer.index', [
            'dealers' => Dealer::latest('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboardhrdastrahonda.dealer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|max:3',
            'nama' => 'required|max:150',
            'alamat' => 'required|max:200',
            'telepon' => 'required|max:100'
        ]);

        Dealer::create($validatedData);
        return redirect('dashboardhrdastrahonda/dealer')->with('success', 'Data yang anda kirimkan berhasil tersimpan ke dalam database kami, Terima Kasih...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dealer $dealer)
    {
        Gate::authorize('admin', $dealer);
        return view('dashboardhrdastrahonda.dealer.show', [
            'dealer' => $dealer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dealer $dealer)
    {
        Gate::authorize('admin', $dealer);
        return view('dashboardhrdastrahonda.dealer.edit', [
            'dealer' => $dealer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dealer $dealer)
    {
        Gate::authorize('admin', $dealer);
        $rules = [
            'id' => 'required|max:3',
            'nama' => 'required|max:150',
            'alamat' => 'required|max:200',
            'telepon' => 'required|max:100'
        ];

        $validatedData = $request->validate($rules);

        Dealer::where('id', $dealer->id)->update($validatedData);
        return redirect('/dashboardhrdastrahonda/dealer')->with('update', 'Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dealer $dealer)
    {
        Gate::authorize('admin', $dealer);
        Dealer::destroy($dealer->id);
        return redirect('/dashboardhrdastrahonda/dealer')->with('success', 'Data berhasil dihapus');
    }
}
