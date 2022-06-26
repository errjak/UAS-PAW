<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabel;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin', ['title' => 'Homepage Admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tabel()
    {
        $data = Tabel::all();
        return view('tabel.index', ['title' => 'Tabel'], compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Tabel;
        return view('tabel.create', ['title' => 'Input'], compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Tabel;
        $model->nama = $request->nama;
        $model->kelas = $request->kelas;
        $model->kode = $request->kode;
        $model->matpel = $request->matpel;
        $model->jadwal = $request->jadwal;
        $model->save();

        return redirect('tabel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabel $tabel)
    {
        return view('tabel.edit', ['title' => 'Edit', 'tabel' => $tabel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tabel $tabel)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'kode' => 'required',
            'matpel' => 'required',
            'jadwal' => 'required'
        ]);

        $tabel->update($data);

        return redirect()->route('tabel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Tabel::find($id);
        $model->delete();

        return redirect('tabel');
    }
}
