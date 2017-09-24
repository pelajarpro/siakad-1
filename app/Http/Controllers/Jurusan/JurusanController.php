<?php

namespace App\Http\Controllers\Jurusan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Jurusan;
use App\Http\Requests\JurusanRequest;

class JurusanController extends Controller
{
    protected $semester;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('Jurusan.jurusanIndex',compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Jurusan.jurusanInsert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(JurusanRequest $request)
    {   
        if ($request->get('jenjang') == "D1") {
            $semester=2;
        }elseif ($request->get('jenjang')== "D3") {
            $semester=6;
        }elseif ($request->get('jenjang')== "S1") {
            $semester=8;
        }elseif ($request->get('jenjang')== "S2") {
            $semester=10;
        }elseif ($request->get('jenjang')== "S3") {
            $semester=12;
        }

        $simpan = new Jurusan([
            'kode_jurusan' => $request->get('kode_jurusan'),
            'nama_jurusan' => $request->get('nama_jurusan'),
            'jenjang' => $request->get('jenjang'),
            'jumlah_semester' => $semester
        ]);

        if ($simpan->save()) {
            $request->session()->flash('status','success');
            $request->session()->flash('pesan', 'Data Berhasil Disimpan');
        }else{
            $request->session()->flash('status','success');
            $request->session()->flash('pesan','Data Gagal Disimpan!!');
        }

        return redirect('Jurusan/create');
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
        $edit = Jurusan::find($id);
        return view('Jurusan.JurusanEdit', compact('edit','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JurusanRequest $request, $id)
    {
        if ($request->get('jenjang') == "D1") {
            $semester=2;
        }elseif ($request->get('jenjang')== "D3") {
            $semester=6;
        }elseif ($request->get('jenjang')== "S1") {
            $semester=8;
        }elseif ($request->get('jenjang')== "S2") {
            $semester=10;
        }elseif ($request->get('jenjang')== "S3") {
            $semester=12;
        }

        $update = Jurusan::find($id);
        $update->nama_jurusan = $request->get('nama_jurusan');
        $update->kode_jurusan = $request->get('kode_jurusan');
        $update->jenjang = $request->get('jenjang');
        $update->jumlah_semester = $semester;

        if ($update->save()) {
            $request->session()->flash('status','success');
            $request->session()->flash('pesan', 'Data Berhasil Disimpan');
        }else{
            $request->session()->flash('status','success');
            $request->session()->flash('pesan','Data Gagal Disimpan!!');
        }

        return redirect('Jurusan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Jurusan::find($id);
        
        if ($hapus->delete()) {
            session()->flash('status','success');
            session()->flash('pesan', 'Data Berhasil Diahpus');
        }else{
            session()->flash('status','success');
            session()->flash('pesan','Data Gagal Dihapus!!');
        }

        return redirect('Jurusan');
        
    }
}