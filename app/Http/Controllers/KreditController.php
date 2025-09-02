<?php

namespace App\Http\Controllers;

use App\Models\Kredit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class KreditController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Kredit $kredit)
    {

        Gate::authorize('admin', $kredit);
        return view('astra.kredit.index', [
            'kredits' => Kredit::latest('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('astra.kredit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:200',
            'email' => 'required|email:dns|unique:kredits',
            'nohp' => 'required|max:13',
            'alamat' => 'required|max:200',
            'provinsi' => 'required',
            'kota' => 'required|max:100',
            'dp' => 'required',
            'jumlahtenor' => 'required',
            'varianmotor' => 'required',
            'rencanapembelian' => 'required',
            'pesan' => 'required'
        ]);

        Kredit::create($validatedData);
        return redirect('/astra/kredit/create')->with('success', 'Data yang anda kirimkan sudah tersimpan ke dalam database kami, Terima Kasih...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kredit $kredit)
    {
        Gate::authorize('admin', $kredit);
        return view('astra.kredit.show', [
            'kredit' => $kredit
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kredit $kredit)
    {
        Gate::authorize('admin', $kredit);
        return view('astra.kredit.edit', [
            'kredit' => $kredit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kredit $kredit)
    {
        Gate::authorize('admin', $kredit);
        $rules = [
            'nama' => 'required|max:200',
            'nohp' => 'required|max:13',
            'alamat' => 'required|max:200',
            'provinsi' => 'required',
            'kota' => 'required|max:100',
            'dp' => 'required',
            'jumlahtenor' => 'required',
            'varianmotor' => 'required',
            'rencanapembelian' => 'required',
            'pesan' => 'required'
        ];

        if($request->email != $kredit->email) {
            $rules['email'] = 'required|email:dns|unique:kredits';
        }

        $validatedData = $request->validate($rules);

        Kredit::where('id', $kredit->id)->update($validatedData);
        return redirect('/astra/kredit')->with('update', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kredit $kredit)
    {
        Gate::authorize('admin', $kredit);
        Kredit::destroy($kredit->id);
        return redirect('/astra/kredit')->with('success', 'Data berhasil dihapus');
    }
}
