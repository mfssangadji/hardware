<?php

namespace App\Http\Controllers;

use App\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = Pengguna::all();
        return view('pengguna.index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        Pengguna::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('pengguna');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show(Pengguna $pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengguna $pengguna)
    {
        $pengguna = Pengguna::findOrfail($pengguna->id);
        return view('pengguna.edit', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengguna $pengguna)
    {
        $val = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        if(empty($request->password)){
            Pengguna::where('id', $pengguna->id)
                ->update([
                    'name' => $request->name, 
                    'email' => $request->email
                ]);
        }else{
            Pengguna::where('id', $pengguna->id)
                ->update([
                    'name' => $request->name, 
                    'email' => $request->email, 
                    'password' => bcrypt($request->password) 
                ]);
        }

        return redirect()->route('pengguna');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengguna $pengguna)
    {
        Pengguna::destroy($pengguna->id);
        return redirect()->route('pengguna');
    }
}
