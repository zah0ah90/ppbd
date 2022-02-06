<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\GalleriFoto;
use App\Models\Galleri_foto_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // $input = $request->all();



        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $imagets = "$profileImage";
        }



        // Product::create($input);
        $insert_galleri_foto = DB::table('tbl_galleri_foto')->insert([
            'nama' => $request->nama,
            'image' => $imagets,
            'type' => 'Galeri Foto',
            'created_at' => date('Y-m-d')
        ]);


        if ($insert_galleri_foto) {
            return redirect()->route('galleri_foto.index')->with('success', 'Berhasil menambahkan data galleri foto');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan data galleri foto');
        }
        // $insert_galleri_foto = DB::table('tbl_galleri_foto')->insertGetId([
        //     'nama' => $request->nama,
        //     'type' => 'Galeri Foto',
        //     'created_at' => date('Y-m-d')
        // ]);

        // $files = [];
        // if ($request->hasfile('image')) {
        //     foreach ($request->file('image') as $data) {
        //         $name = time() . rand(1, 50) . '.' . $data->extension();
        //         $data->move(public_path('image'), $name);
        //         // $files[] = $name;
        //         DB::table('tbl_galleri_foto_detail')->insert([
        //             'nama' => $name,
        //             'galleri_foto_id' => $insert_galleri_foto,
        //             'created_at' => date('Y-m-d')
        //         ]);
        //     }
        // }




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
        return view('backend.gallerifoto.edit', compact('gallerifoto'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallerifoto  $gallerifoto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = DB::table('tbl_galleri_foto')->where('id', $id)->first();
        if ($image->image) {
            unlink("image/" . $image->image);
        }
        DB::table('tbl_galleri_foto')->where('id', $id)->delete();


        return redirect()->back()->with('success', 'Berhasil Menghapus!');
        // return redirect()->route('products.index')->with('success','Product deleted successfully');
    }
}