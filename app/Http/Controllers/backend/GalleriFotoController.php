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
            // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $insert_galleri_foto = DB::table('tbl_galleri_foto')->insertGetId([
            'nama' => $request->nama,
            'type' => 'Galeri Foto',
            'created_at' => date('Y-m-d')
        ]);

        // $files = [];
        if ($request->hasfile('image')) {
            foreach ($request->file('image') as $data) {
                $name = time() . rand(1, 50) . '.' . $data->extension();
                $data->move(public_path('image'), $name);
                // $files[] = $name;
                DB::table('tbl_galleri_foto_detail')->insert([
                    'nama' => $name,
                    'galleri_foto_id' => $insert_galleri_foto,
                    'created_at' => date('Y-m-d')
                ]);
            }
        }
        // echo '<pre>';
        // // print_r($files);
        // print_r(implode("|", $files));
        // die();

        // Galleri_foto_detail::insert()
        // $file = new Galleri_foto_detail();
        // $file->filenames = $files;
        // $file->galleri_foto_id = $gallerifoto->id;
        // $file->save();



        if ($insert_galleri_foto) {
            return redirect()->route('galleri_foto.index')->with('success', 'Berhasil menambahkan data galleri foto');
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
        return view('backend.gallerifoto.edit', compact('gallerifoto'));
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
        } else {
            unset($input['image']);
        }

        $gallerifoto->update($input);

        if ($gallerifoto) {
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