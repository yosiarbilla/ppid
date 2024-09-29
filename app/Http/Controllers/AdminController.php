<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Beritakanan;
use App\Models\Permohonaninformasipublik;

class AdminController extends Controller
{
    public function view_addberita(){
        $berita = Berita::all(); // Assuming 'Berita' is the model for 'beritakiri'
        $beritakanan = Beritakanan::all();
        
;
        return view('admin.addberita', compact('berita','beritakanan'));
    }

    public function add_berita(Request $request)
    {
        // Proses Berita Kiri
        if ($request->has('headline') && $request->has('date') && $request->has('description')) {
            $berita = new Berita;
            $berita->Headline = $request->headline;
            $berita->Tanggal = $request->date;
            $berita->Deskripsi = $request->description;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $image->move('berita', $imagename);
                $berita->image = $imagename;
            }

            $berita->save();
        }

        // Proses Berita Kanan
        if ($request->has('headlinekanan') && $request->has('datekanan') && $request->has('descriptionkanan')) {
            $beritakanan = new Beritakanan;
            $beritakanan->Headlinekanan = $request->headlinekanan;
            $beritakanan->Tanggalkanan = $request->datekanan;
            $beritakanan->Deskripsikanan = $request->descriptionkanan;

            if ($request->hasFile('imagekanan')) {
                $imagekanan = $request->file('imagekanan');
                $imagenamekanan = time() . '.' . $imagekanan->getClientOriginalExtension();
                $imagekanan->move('beritakanan', $imagenamekanan);
                $beritakanan->imagekanan = $imagenamekanan;
            }

            $beritakanan->save();
        }

        return redirect()->back()->with('message', 'Berita berhasil ditambahkan');
    }
    public function view_showberita()
    {
        $berita = Berita::all(); // Assuming 'Berita' is the model for 'beritakiri'
        $beritakanan = Beritakanan::all();
        return view('admin.showberita', compact('berita','beritakanan'));
    }
    public function delete_beritakiri($id){
        $berita=Berita::find($id);
        $berita->delete();
        return redirect()->back()->with('message','Berita Telah Terhapus');

    }
    public function delete_beritakanan($id){
        $beritakanan=Beritakanan::find($id);
        $beritakanan->delete();
        return redirect()->back()->with('message','Berita Telah Terhapus');

    }
    public function update_beritakiri($id)
    {
        
        $berita=Berita::find($id);
        
        return view('admin.updateberitakiri', compact('berita'));
    }
    public function update_beritakiri_confirm(Request $request, $id)
    {
    $berita = Berita::find($id);
    $berita->Headline = $request->headline;
    $berita->Tanggal = $request->date;
    $berita->Deskripsi = $request->description;

    $image = $request->image;
    if($image){
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move('berita', $imagename);
        $berita->image = $imagename;
        }
    $berita->save();

    return redirect()->back()->with('message', 'Berita berhasil diperbarui');
    }

    public function permohonan_informasi_publik(){
        return view('admin.permohonan_informasi_publik');
    }

    public function detail_permohonan_informasi_publik($id){
        return view('admin.detail_permohonan_informasi_publik');
    }

    
}


