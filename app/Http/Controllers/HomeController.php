<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Berita;
use App\Models\Beritakanan;
use App\Models\Permohonaninformasipublik;


class HomeController extends Controller
{
    public function form_permohonan_informasi_publik(){
        return view('home.form_permohonan_informasi_publik');
    }
    public function tambah_form_permohonan_informasi_publik(Request $request){
        // Buat instance dari model Permohonaninformasipublik
        $permohonaninformasipublik = new Permohonaninformasipublik;
        
        // Isi data dari request ke dalam model
        $permohonaninformasipublik->nik = $request->nik;
        $permohonaninformasipublik->nama = $request->nama;
        $permohonaninformasipublik->alamat = $request->alamat;
        $permohonaninformasipublik->email = $request->email;
        $permohonaninformasipublik->nomortelepon = $request->telepon;
        $permohonaninformasipublik->pekerjaan = $request->pekerjaan;
        $permohonaninformasipublik->rincianinformasi = $request->rincian;
        $permohonaninformasipublik->tujuan = $request->tujuan;
        $permohonaninformasipublik->caramemperolehinformasi = $request->cara;
        $permohonaninformasipublik->mendapatkansalinaninformasi = $request->salinan;
        $permohonaninformasipublik->caramendapatkansalinaninformasi = $request->carasalinan;
    
        // Cek apakah file imagektp diupload
        if ($request->hasFile('imagektp')) {
            // Ambil file dari request
            $imagektp = $request->file('imagektp');
            
            // Buat nama unik untuk file
            $imagename = time() . '.' . $imagektp->getClientOriginalExtension();
            
            // Pindahkan file ke folder yang diinginkan
            $imagektp->move(public_path('imagektp'), $imagename);
            
            // Simpan nama file ke dalam database
            $permohonaninformasipublik->imagektp = $imagename;
        }
    
        // Simpan data ke database
        $permohonaninformasipublik->save();
    
        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('message', 'Form Berhasil Terkirim');
    }
    

    public function index()
    {
        $berita = Berita::orderBy('created_at', 'desc')->take(4)->get();
        $beritakanan = Beritakanan::orderBy('created_at', 'desc')->take(4)->get();
        return view('home.homepage', compact('berita','beritakanan'));
    } 

    public function adminredirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='admin')
        {
            return view('admin.home');
        }
         
        else
        {
            return view('home.homepage');
        }
    }
}
