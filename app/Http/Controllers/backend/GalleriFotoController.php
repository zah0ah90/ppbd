<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\GalleriFoto;
use Illuminate\Http\Request;

class GalleriFotoController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerifoto = Gallerifoto::paginate(10);
        // $user = User::where('person_id', '=', 1);
        
        return view('backend.galleri_foto.index', ['gallerifoto' => $gallerifoto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.galleri_foto.tambah');
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
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'wali_kelas' => 'required',
            'mengajar_sejak' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'backend/image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        $gallerifoto = Gallerifoto::create($input);
        $gallerifoto->id;

        if($gallerifoto->save()) {
            return redirect()->route('gallerifoto.index')->with('success', 'Berhasil menambahkan data galleri foto');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan data galleri foto');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallerifoto  $gallerifoto
     * @return \Illuminate\Http\Response
     */
    public function show(Gallerifoto $gallerifoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallerifoto  $gallerifoto
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallerifoto $gallerifoto)
    {
        return view('backend.gallerifoto.edit',compact('gallerifoto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallerifoto  $gallerifoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallerifoto $gallerifoto)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'wali_kelas' => 'required',
            'mengajar_sejak' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {

            $destinationPath = 'backend/image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $gallerifoto->update($input);

        if($gallerifoto) {
            return redirect()->route('gallerifoto.index')->with('success', 'Berhasil memperbarui data gallerifoto');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data gallerifoto');
        }

        // $product->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallerifoto  $gallerifoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallerifoto $gallerifoto)
    {
        $gallerifoto->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus!');
        // return redirect()->route('products.index')->with('success','Product deleted successfully');
    }
}