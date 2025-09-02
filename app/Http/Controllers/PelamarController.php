<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use App\Models\Pelamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Pelamar $pelamar)
    {
        Gate::authorize('admin', $pelamar);
        return view('astra.pelamar.index', [
            'pelamars' => Pelamar::latest('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('astra.pelamar.create', [
            'karirs' => Karir::latest('id')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jabatan_id' => 'required',
            'email' => 'required|email:dns|unique:pelamars',
            'nik' => 'required|unique:pelamars',
            'namalengkap' => 'required|max:200',
            'tanggallahir' => 'required',
            'tempatlahir' => 'required|max:200',
            'jeniskelamin' => 'required',
            'alamat' => 'required|max:200',
            'agama' => 'required',
            'nohp' => 'required|max:13',
            'pasphoto' => 'required|image|mimes:jpeg,jpg,png|file|max:2000',
            'cv' => 'required|mimes:pdf|file|max:5000',
            'ijazah' => 'required|mimes:pdf|file|max:3000',
            'transkripnilai' => 'required|mimes:pdf|file|max:3000',
            'ktp' => 'required|image|mimes:jpeg,jpg,png|file|max:3000',
            'kk' => 'required|mimes:pdf|file|max:3000',
            'skck' => 'required|mimes:pdf|file|max:3000'
        ]);

        if($request->file('pasphoto')) {
            $validatedData['pasphoto'] = $request->file('pasphoto')->store('berkasastra-pasphoto');
        }

        if($request->file('cv')) {
            $validatedData['cv'] = $request->file('cv')->store('berkasastra-cv');
        }

        if($request->file('ijazah')) {
            $validatedData['ijazah'] = $request->file('ijazah')->store('berkasastra-ijazah');
        }

        if($request->file('transkripnilai')) {
            $validatedData['transkripnilai'] = $request->file('transkripnilai')->store('berkasastra-transkripnilai');
        }

        if($request->file('ktp')) {
            $validatedData['ktp'] = $request->file('ktp')->store('berkasastra-ktp');
        }

        if($request->file('kk')) {
            $validatedData['kk'] = $request->file('kk')->store('berkasastra-kk');
        }

        if($request->file('skck')) {
            $validatedData['skck'] = $request->file('skck')->store('berkasastra-skck');
        }

        Pelamar::create($validatedData);
        return redirect('astra/pelamar/create')->with('success', 'Data yang anda kirim berhasil tersimpan ke dalam database kami, Good Luck!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelamar $pelamar)
    {
        Gate::authorize('admin', $pelamar);
        return view('astra.pelamar.show', [
            'pelamar' => $pelamar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelamar $pelamar)
    {
        Gate::authorize('admin', $pelamar);
        return view('astra.pelamar.edit', [
            'pelamar' => $pelamar,
            'karirs' => Karir::latest('id')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelamar $pelamar)
    {
        Gate::authorize('admin', $pelamar);
        $rules = [
            'jabatan_id' => 'required',
            'namalengkap' => 'required|max:200',
            'tanggallahir' => 'required',
            'tempatlahir' => 'required|max:200',
            'jeniskelamin' => 'required',
            'alamat' => 'required|max:200',
            'agama' => 'required',
            'nohp' => 'required|max:13',
            'pasphoto' => 'required|image|mimes:jpeg,jpg,png|file|max:2000',
            'cv' => 'required|mimes:pdf|file|max:5000',
            'ijazah' => 'required|mimes:pdf|file|max:3000',
            'transkripnilai' => 'required|mimes:pdf|file|max:3000',
            'ktp' => 'required|image|mimes:jpeg,jpg,png|file|max:3000',
            'kk' => 'required|mimes:pdf|file|max:3000',
            'skck' => 'required|mimes:pdf|file|max:3000'
        ];

        if($request->email != $pelamar->email) {
            $rules['email'] = 'required|email:dns|unique:pelamars';
        }

        if($request->nik != $pelamar->nik) {
            $rules['nik'] = 'required|unique:pelamars';

        }

        $validatedData = $request->validate($rules);

        if($request->file('pasphoto')) {
            if($request->oldpasphoto) {
                Storage::delete($request->oldpasphoto);
            }
            $validatedData['pasphoto'] = $request->file('pasphoto')->store('berkasastra-pasphoto');
        }

        if($request->file('cv')) {
            if($request->oldcv) {
                Storage::delete($request->oldcv);
            }
            $validatedData['cv'] = $request->file('cv')->store('berkasastra-cv');
        }

        if($request->file('ijazah')) {
            if($request->oldijazah) {
                Storage::delete($request->oldijazah);
            }
            $validatedData['ijazah'] = $request->file('ijazah')->store('berkasastra-ijazah');
        }

        if($request->file('transkripnilai')) {
            if($request->oldtranskripnilai) {
                Storage::delete($request->oldtranskripnilai);
            }
            $validatedData['transkripnilai'] = $request->file('transkripnilai')->store('berkasastra-transkripnilai');
        }

        if($request->file('ktp')) {
            if($request->oldktp) {
                Storage::delete($request->oldktp);
            }
            $validatedData['ktp'] = $request->file('ktp')->store('berkasastra-ktp');
        }

        if($request->file('kk')) {
            if($request->oldkk) {
                Storage::delete($request->oldkk);
            }
            $validatedData['kk'] = $request->file('kk')->store('berkasastra-kk');
        }

        if($request->file('skck')) {
            if($request->oldskck) {
                Storage::delete($request->oldskck);
            }
            $validatedData['skck'] = $request->file('skck')->store('berkasastra-skck');
        }

        Pelamar::where('id', $pelamar->id)->update($validatedData);
        return redirect('astra/pelamar')->with('update', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelamar $pelamar)
    {
        Gate::authorize('admin', $pelamar);
        if($pelamar->pasphoto) {
            Storage::delete($pelamar->pasphoto);
        }
        if($pelamar->cv) {
            Storage::delete($pelamar->cv);
        }
        if($pelamar->ijazah) {
            Storage::delete($pelamar->ijazah);
        }
        if($pelamar->transkripnilai) {
            Storage::delete($pelamar->transkripnilai);
        }
        if($pelamar->ktp) {
            Storage::delete($pelamar->ktp);
        }
        if($pelamar->kk) {
            Storage::delete($pelamar->kk);
        }
        if($pelamar->skck) {
            Storage::delete($pelamar->skck);
        }
        Pelamar::destroy($pelamar->id);
        return redirect('/astra/pelamar')->with('success', 'Data berhasil dihapus');
    }
}
