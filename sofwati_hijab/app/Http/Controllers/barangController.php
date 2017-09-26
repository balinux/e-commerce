<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
class barangController extends Controller
{
    public function index()
    {
        return Barang::with('galery')->latest()->get();
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'stok'=>'required'
        ]);

        Barang::create($request->all());
        return 'success';
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'stok'=>'required'
        ]);

        Barang::find($id)->update($request->all());
        return 'success update';
    }
    public function destroy($id)
    {
        Barang::find($id)->delete();
        return 'success delete';
    }

    public function galery(Request $request)
    {
        if ($request->file('image')) {
            return 'file ada';
        }else {
            return 'no file';
        }
        // $cat->contents()->create($request->all());
        $gambar       = $request->file('image');
        // $imagename    = $gambar->getClientOriginalName();
        $imagename    = str_random(17).'.'.$gambar->getClientOriginalExtension();
        $dirimage     = 'image';

        $gambar->move($dirimage,$imagename);

        return 'sukses upload';
    }

    public function show($id)
    {
        return response()->json(Barang::find($id)->first());
    }

    public function thumb($id)
    {
        return response()->json(Barang::find($id)->galery);
    }

    public function shop()
    {
        return view('shop');
    }
}
