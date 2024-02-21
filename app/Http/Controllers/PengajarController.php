<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use App\Models\Guru;
use App\Models\Mapel;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengajar = Pengajar::all();

        return view('pengajar.index', compact('pengajar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $guru = Guru::all();
        $mapel = Mapel::all();
        return view('Pengajar.create', compact('guru', 'mapel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Pengajar $pengajar)
    {
        $this->validate($request, [
            'id_guru' => 'required',
            'id_mapel' => 'required',
            'kelas' => 'required',
            'jam_pelajaran' => 'required',
         ]);

        Pengajar::create([
            'id_guru' => $request->id_guru,
            'id_mapel' => $request->id_mapel,
            'kelas' => $request->kelas,
            'jam_pelajaran' => $request->jam_pelajaran,
     ]);

         //redirect to index
         return redirect()->route('pengajar.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengajar $pengajar)
    {
        $guru = Guru::all();
        $mapel = Mapel::all();
        return view('pengajar.edit', compact('pengajar', 'guru', 'mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengajar $pengajar)
    {
        //validate form
        $this->validate($request, [
            'id_guru'     => 'required',
            'id_mapel'     => 'required',
            'kelas'     => 'required',
            'jam_pelajaran'     => 'required',
        ]);

        $data = [
            'id_guru'=>$request->id_guru,
            'id_mapel'=>$request->id_mapel,
            'kelas'=>$request->kelas,
            'jam_pelajaran'=>$request->jam_pelajaran,
        ];

        $pengajar->update([
        'id_guru'=>$request->input('id_guru'),
        'id_mapel'=>$request->input('id_mapel'),
        'kelas'=>$request->input('kelas'),
        'jam_pelajaran'=>$request->input('jam_pelajaran'),
        ]);

        //redirect to index
        return redirect()->route('pengajar.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengajar $pengajar)
    {
        $pengajar->delete();

        //redirect to index
        return redirect()->route('pengajar.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
