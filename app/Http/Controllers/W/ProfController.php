<?php

namespace App\Http\Controllers\W;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Webprofile;
use App\Webgalery;
use App\Webbackground;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Webprofile::first();
        $fotoBg = Webbackground::all();
        $fotoGaleri = Webgalery::all(); 
        return view('Web.index',compact('data','fotoBg','fotoGaleri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Web.ProfilInsert');
    }

    public function createGallery()
    {
        return view('Web.GalleryInsert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $fotoAbout = $request->file('foto_about');
        $namaFotoAbout = md5($fotoAbout->getClientOriginalName().time()).".".$fotoAbout->getClientOriginalExtension();
        $fotoAbout->storeAs('public/web',$namaFotoAbout);

        $sliders = $request->file('slider');

        $slide1 = $sliders[0];
        $namaSlider1 = md5($slide1->getClientOriginalName().time()).".".$slide1->getClientOriginalExtension();
        $slide1->storeAs('public/web',$namaSlider1);

        $slide2 = $sliders[1];
        $namaSlider2 = md5($slide2->getClientOriginalName().time()).".".$slide2->getClientOriginalExtension();
        $slide2->storeAs('public/web',$namaSlider2);

        $slide3 = $sliders[2];
        $namaSlider3 = md5($slide3->getClientOriginalName().time()).".".$slide3->getClientOriginalExtension();
        $slide3->storeAs('public/web',$namaSlider3);

        $data = new Webprofile([
            'nama_kampus' => $request->input('nama_kampus'),
            'judul_about' => $request->input('judul_about'),
            'isi_about' => $request->input('isi_about'),
            'foto_about' => $namaFotoAbout,
            'alamat_kampus' => $request->input('alamat_kampus'),
            'telepon_kampus' => $request->input('telepon_kampus'),
            'fax_kampus' => $request->input('fax_kampus'),
            'email_kampus' => $request->input('email_kampus'),
            'fb_kampus' => $request->input('fb_kampus'),
            'twitter_kampus' => $request->input('twitter_kampus'),
            'linkedin_kampus' => $request->input('linkedin_kampus'),
            'google_kampus' => $request->input('google_kampus'),
            'koordinat' => $request->input('koordinat'),
            'foto_slider1' => $namaSlider1,
            'foto_slider2' => $namaSlider2,
            'foto_slider3' => $namaSlider3
        ]);

        if ( $data->save()) {
            session()->flash('status','done_all');
            session()->flash('pesan','Profil Web berhasil diperbaharui');
        }else{
            session()->flash('status','clear');
            session()->flash('pesan','Profil Web gagal diperbaharui');
        }

        return redirect('/Web/create');
    }

    public function storeGallery(Request $request)
    {
        $foto_background1 = $request->file('foto_background1');
        $nama_fbg1 = md5($foto_background1->getClientOriginalName().time()).".".$foto_background1->getClientOriginalExtension();
        $foto_background1->storeAs('public/web',$nama_fbg1);

        $foto_background2 = $request->file('foto_background2');
        $nama_fbg2 = md5($foto_background2->getClientOriginalName().time()).".".$foto_background2->getClientOriginalExtension();
        $foto_background2->storeAs('public/web',$nama_fbg2);

        $foto_background3 = $request->file('foto_background3');
        $nama_fbg3 = md5($foto_background3->getClientOriginalName().time()).".".$foto_background3->getClientOriginalExtension();
        $foto_background3->storeAs('public/web',$nama_fbg3);
        
        $namabg = array($nama_fbg1,$nama_fbg2,$nama_fbg3);

        foreach ($namabg as $nama) {
            $simpanBg = new Webbackground([
                'foto_background' => $nama
            ]);
            $simpanBg->save();
        }

        $gallery = $request->file('foto_galery');
            foreach ($gallery as $galeri) { 
                $namaFoto = md5($galeri->getClientOriginalName().time()).".".$galeri->getClientOriginalExtension();
                $galeri->storeAs('public/web',$namaFoto);
                $simpan = new Webgalery([
                    'foto_galery' => $namaFoto
                ]);
                $simpan->save();
            }
        return redirect('/Web');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
