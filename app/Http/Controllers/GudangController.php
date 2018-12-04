<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Gudang;
class GudangController extends Controller
{
    public function edit($id)
    {
        $gudang = Gudang::all()->where('id',$id);
        return view('Gudang.edit', compact('gudang'));
    }
    public function all() {
        $gudang = Gudang::all();
        return view('Gudang.all',compact('gudang'));
    }
    public function add(){
    	$gudang = Gudang::all();
    	return view('Gudang.add', compact('gudang'));
    }
    public function update(Request $r) 
    {
        $id = $r->id;
        $alamat = $r->alamat;
        $kapasitas = $r->kapasitas;
        $gambar = $r->pict;
        $gudang = Gudang::find($id);
        $gudang->alamat = $alamat;
        $gudang->kapasitas = $kapasitas;
        $file = $r->file('gambar');
        $filename = $file->getClientOriginalName();
        $r->file('gambar')->move("picture/", $filename);
        $gudang->pict = $filename;
        $gudang->save();
        return redirect('gudang/all');
    }
    public function save(Request $r)
    {
    	$gdg = new Gudang;
        $gdg->alamat = $r->input('alamat');
        $gdg->kapasitas = $r->input('kapasitas');
        $foto = $r->file("foto");
        $nama_foto = $foto->getClientOriginalName();
        $r->file('foto')->move("uploads/img/", $nama_foto);
        $gdg->pict = $nama_foto;
        $gdg->save();
    	return redirect('gudang/all');
    }
    public function delete($id)
    {
    	$gudang = Gudang::find($id);
    	$gudang->delete();
    	return redirect()->back();
    }
}