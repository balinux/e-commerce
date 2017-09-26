<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Barang;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        return view('home', compact('barang'));
    }
    public function galery($id)
    {
        $a = Barang::find($id);
        return view('galery', compact('a'));
    }

    public function storeimage(Request $request)
    {
        if ($request->file('file')) {
        $gambar       = $request->file('file');
        $imagename    = str_random(17).'.'.$gambar->getClientOriginalExtension();
        $dirimage     = 'image';
        $gambar->move($dirimage,$imagename);
        }else {
            return 'no file';
        }

        Barang::find($request->input('id'))->galery()->create([
            'name' => $imagename
        ]);
    }
}
