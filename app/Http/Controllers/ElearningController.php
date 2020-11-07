<?php

namespace App\Http\Controllers;

use App\Elearning;
use Illuminate\Http\Request;

class ElearningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->id;
        $elearning = Elearning::where('kategori_id', $request->id)->get();
        return view('elearning.index', compact('elearning', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $kid = $request->id; 
        $kategori = \App\Kategori::all();
        return view('elearning.create', compact('kid','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kategori_id' => 'required',
            'judul' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required',
            'vlink' => 'required',
        ]);

        $ext = $request->file('gambar')->getClientOriginalExtension();
        $image = time().'.'.$ext;

        Elearning::create([
            'kategori_id' => $request->kategori_id,
            'judul' => $request->judul,
            'gambar' => $image,
            'deskripsi' => $request->deskripsi,
            'vlink' => $request->vlink,
        ]);

        $request->file('gambar')->move('upload/', $image);

        return redirect('elearning/'.$request->kategori_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Elearning  $elearning
     * @return \Illuminate\Http\Response
     */
    public function show(Elearning $elearning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Elearning  $elearning
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Elearning $elearning)
    {
        $id = $request->id;
        $kid = $request->kategori_id; 
        $kategori = \App\Kategori::all();
        $elearning = Elearning::find($request->id);
        return view('elearning.edit', compact('elearning','id','kid','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Elearning  $elearning
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Elearning $elearning)
    {
        $this->validate($request, [
            'kategori_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'vlink' => 'required',
        ]);

        if(empty($request->gambar)){
            Elearning::where('id', $request->id)
            ->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'vlink' => $request->vlink,
            ]);
        }else{
            $ext = $request->file('gambar')->getClientOriginalExtension();
            $image = time().'.'.$ext;
            $request->file('gambar')->move('upload/', $image);

            Elearning::where('id', $request->id)
            ->update([
                'judul' => $request->judul,
                'gambar' => $image,
                'deskripsi' => $request->deskripsi,
                'vlink' => $request->vlink,
            ]);
        }

        return redirect('elearning/'.$request->kategori_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Elearning  $elearning
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Elearning $elearning)
    {
        Elearning::destroy($request->id);
        return redirect('elearning/'.$request->kategori_id);
    }
}
