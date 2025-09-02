<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Service $service)
    {
        Gate::authorize('admin', $service);
        return view('astra.service.index', [
            'services' => Service::latest('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('astra.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:200',
            'email' => 'required|email:dns|unique:services',
            'nohp' => 'required|max:13',
            'alamat' => 'required|max:200',
            'provinsi' => 'required',
            'kota' => 'required|max:100',
            'varianmotor' => 'required',
            'tahunpembuatan' => 'required',
            'jenisservice' => 'required',
            'jadwal' => 'required',
            'jam' => 'required'
        ]);

        Service::create($validatedData);
        return redirect('astra/service/create')->with('success', 'Data yang anda kirimkan berhasil tersimpan ke dalam database kami, Terima Kasih...!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        Gate::authorize('admin', $service);
        return view('astra.service.show', [
            'service' => $service
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        Gate::authorize('admin', $service);
        return view('astra.service.edit', [
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        Gate::authorize('admin', $service);
        $rules = [
            'nama' => 'required|max:200',
            'nohp' => 'required|max:13',
            'alamat' => 'required|max:200',
            'provinsi' => 'required',
            'kota' => 'required|max:100',
            'varianmotor' => 'required',
            'tahunpembuatan' => 'required',
            'jenisservice' => 'required',
            'jadwal' => 'required',
            'jam' => 'required'
        ];

        if($request->email != $service->email) {
            $rules['email'] = 'required|email:dns|unique:services';
        }

        $validatedData = $request->validate($rules);

        Service::where('id', $service->id)->update($validatedData);
        return redirect('/astra/service')->with('update', 'Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        Gate::authorize('admin', $service);
        Service::destroy($service->id);
        return redirect('/astra/service')->with('success', 'Data berhasil dihapus');
    }
}
