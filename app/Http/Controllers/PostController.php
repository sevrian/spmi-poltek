<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Dokumen;
use App\Models\Tahun;
use App\User;
use  App\Models\Unit;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $post = Post::with('user')->get();

        return view('post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kriteria = Kriteria::all();
        $dokumen = Dokumen::all();
        $tahun = Tahun::all();
        return view('post.create', compact(['kriteria', 'dokumen', 'tahun']));
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
            'dokumen_id' => 'required',
            'tahun_id' => 'required',
            'kriteria_id' => 'required',
            'file' => 'required',
            'nama' => 'required',
            'keterangan' => 'nullable',
        ]);
        $file = $request->file;
        $new_file = $file->getClientOriginalName();
        $post = Post::create([
            'dokumen_id' => $request->dokumen_id,
            'tahun_id' => $request->tahun_id,
            'user_id' => Auth::user()->id,
            'kriteria_id' => $request->kriteria_id,
            'file' => 'public/uploads/post/' . $new_file,
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,

        ]);

        $post->save();
        $file->move('public/uploads/post/', $new_file);
        return redirect()->route('post.index')->with('success', 'Postingan anda berhasil disimpan');
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
    public function edit($id)
    {
        $kriteria = Kriteria::all();
        $dokumen = Dokumen::all();
        $tahun = Tahun::all();
        $post = Post::findorfail($id);

        return view('post.edit', compact('kriteria', 'dokumen', 'tahun', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $post = Post::findorfail($id);
        if ($request->has('file')) {
            $file = $request->file;
            $new_file = $file->getClientOriginalName();
            $file->move('public/uploads/post/', $new_file);
            $post_data = [
                'dokumen_id' => $request->dokumen_id,
                'tahun_id' => $request->tahun_id,
                'user_id' => Auth::user()->id,
                'kriteria_id' => $request->kriteria_id,
                'file' => 'public/uploads/post/' . $new_file,
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,

            ];
        } else {
            $post_data = [
                'dokumen_id' => $request->dokumen_id,
                'tahun_id' => $request->tahun_id,
                'user_id' => Auth::user()->id,
                'kriteria_id' => $request->kriteria_id,
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,

            ];
        }
        $post->update($post_data);
        return redirect()->back()->with('success', 'Postingan anda berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();

        return back();
    }
}
