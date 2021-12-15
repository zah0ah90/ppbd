<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\GalleriVideo;
use Illuminate\Http\Request;

class GalleriVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleri_video = GalleriVideo::all();
        // $user = User::where('person_id', '=', 1);
        
        return view('backend.galleri_video.index', ['galleri_video' => $galleri_video]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.galleri_video.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'embed_link' => 'required',
        ]);

        $galleri_video = GalleriVideo::create($request->all());

        if($galleri_video->save()) {
            return redirect()->route('galleri_video.index')->with('success', 'Berhasil menambahkan data Galleri Video');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan data Galleri Video');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GalleriVideo  $galleriVideo
     * @return \Illuminate\Http\Response
     */
    public function show(GalleriVideo $galleriVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GalleriVideo  $galleriVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(GalleriVideo $galleriVideo)
    {
        // $galleri_video = 
        // echo '<pre>';
        // var_dump($galleriVideo->all());
        // die();

        // dd($galleriVideo->get());
        return view('backend.galleri_video.edit',compact('galleriVideo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GalleriVideo  $galleriVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GalleriVideo $galleriVideo)
    {
        $request->validate([
            'nama' => 'required',
            'embed_link' => 'required',
        ]);

        // $galleri_video = Galleri_video::find($id);
        // $galleri_video->nis = $request->nis;
        // $galleri_video->nama = $request->nama;

        $galleriVideo->update($request->all());

        if($galleriVideo) {
            return redirect()->route('galleri_video.index')->with('success', 'Berhasil memperbarui data Galleri Video');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data Galleri Video');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GalleriVideo  $galleriVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleriVideo $galleriVideo)
    {
        $galleriVideo->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus!');
    }
}