<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Mahasiswa;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = M_Mahasiswa::all();
        return view('index')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        M_Mahasiswa::insert($data);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = M_Mahasiswa::findOrFail($id);
        return view('show')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = M_Mahasiswa::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = M_Mahasiswa::find($id);
        $item->delete();
        return redirect('/');
    }
}
