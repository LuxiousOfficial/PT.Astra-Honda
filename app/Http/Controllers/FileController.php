<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(File $file)
    {
        Gate::authorize('developer', $file);
        return view('user/file/index', [
            'files' => File::where('user_id', Auth::id())->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user/file/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pasphoto' => 'required|image|mimes:jpeg,jpg,png|file|max:2000',
            'cv' => 'required|mimes:pdf|file|max:5000',
            'ktp' => 'required|image|mimes:jpeg,jpg,png|file|max:3000',
            'kk' => 'required|mimes:pdf|file|max:3000',
            'ijazah' => 'required|mimes:pdf|file|max:3000',
            'transkrip_nilai' => 'required|mimes:pdf|file|max:3000',
            'skck' => 'required|mimes:pdf|file|max:3000'
        ]);

        if($request->file('pasphoto')) {
            $validatedData['pasphoto'] = $request->file('pasphoto')->store('berkasastra-pasphoto');
        }

        if($request->file('cv')) {
            $validatedData['cv'] = $request->file('cv')->store('berkasastra-cv');
        }

        if($request->file('ktp')) {
            $validatedData['ktp'] = $request->file('ktp')->store('berkasastra-ktp');
        }

        if($request->file('kk')) {
            $validatedData['kk'] = $request->file('kk')->store('berkasastra-kk');
        }

        if($request->file('ijazah')) {
            $validatedData['ijazah'] = $request->file('ijazah')->store('berkasastra-ijazah');
        }

        if($request->file('transkrip_nilai')) {
            $validatedData['transkrip_nilai'] = $request->file('transkrip_nilai')->store('berkasastra-transkrip_nilai');
        }

        if($request->file('skck')) {
            $validatedData['skck'] = $request->file('skck')->store('berkasastra-skck');
        }

        $userId = Auth::id();
        $validatedData['user_id'] = $userId;

        File::create($validatedData);
        return redirect('user/file/create')->with('success', 'Data yang anda kirim berhasil tersimpan ke dalam database kami, Good Luck!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(File $file)
    {
        Gate::authorize('developer', $file);
        return view('user/file/show', [
            'file' => $file
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File $file)
    {
        Gate::authorize('developer', $file);
        return view('user/file/edit', [
            'file' => $file,
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, File $file)
    {
        Gate::authorize('developer', $file);
        $rules = [
            'pasphoto' => 'required|image|mimes:jpeg,jpg,png|file|max:2000',
            'cv' => 'required|mimes:pdf|file|max:5000',
            'ktp' => 'required|image|mimes:jpeg,jpg,png|file|max:3000',
            'kk' => 'required|mimes:pdf|file|max:3000',
            'ijazah' => 'required|mimes:pdf|file|max:3000',
            'transkrip_nilai' => 'required|mimes:pdf|file|max:3000',
            'skck' => 'required|mimes:pdf|file|max:3000'
        ];

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

        if($request->file('ijazah')) {
            if($request->oldijazah) {
                Storage::delete($request->oldijazah);
            }
            $validatedData['ijazah'] = $request->file('ijazah')->store('berkasastra-ijazah');
        }

        if($request->file('transkrip_nilai')) {
            if($request->oldtranskripnilai) {
                Storage::delete($request->oldtranskripnilai);
            }
            $validatedData['transkrip_nilai'] = $request->file('transkrip_nilai')->store('berkasastra-transkripnilai');
        }

        if($request->file('skck')) {
            if($request->oldskck) {
                Storage::delete($request->oldskck);
            }
            $validatedData['skck'] = $request->file('skck')->store('berkasastra-skck');
        }

        File::where('id', $file->id)->update($validatedData);
        return redirect('user/file')->with('update', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        Gate::authorize('developer', $file);
        if($file->pasphoto) {
            Storage::delete($file->pasphoto);
        }
        if($file->cv) {
            Storage::delete($file->cv);
        }
        if($file->ktp) {
            Storage::delete($file->ktp);
        }
        if($file->kk) {
            Storage::delete($file->kk);
        }
        if($file->ijazah) {
            Storage::delete($file->ijazah);
        }
        if($file->transkripnilai) {
            Storage::delete($file->transkrip_nilai);
        }
        if($file->skck) {
            Storage::delete($file->skck);
        }
        File::destroy($file->id);
        return redirect('/user/file')->with('success', 'Data berhasil dihapus');
    }
}
