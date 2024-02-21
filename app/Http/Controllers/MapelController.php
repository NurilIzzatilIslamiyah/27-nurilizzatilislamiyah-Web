<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Guru;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapel = Mapel::latest()->paginate(10);

        return view('mapel.index', compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mapel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Mapel $mapel)
    {
        $this->validate($request, [
            'nama_mapel' => 'required',
         ]);

        Mapel::create([
            'nama_mapel' => $request->nama_mapel,
     ]);

         //redirect to index
         return redirect()->route('mapel.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mapel $mapel)
    {
        return view('mapel.edit', compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mapel $mapel)
    {
        //validate form
        $this->validate($request, [
            'nama_mapel'     => 'required',
        ]);

        //update post with new image
        $mapel->update([
            'nama_mapel'     => $request->nama_mapel,
        ]);

    //redirect to index
    return redirect()->route('mapel.index')->with(['success' => 'Data Berhasil Diubah!']);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mapel $mapel)
    {
        $mapel->delete();

        //redirect to index
        return redirect()->route('mapel.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
