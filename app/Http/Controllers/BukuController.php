<?php

namespace App\Http\Controllers;

use DB;
use App\Models\buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $buku = buku::all();
            return view('buku.index', compact('buku'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('buku.create');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            // membuat valiadasi
            $request->validate([
                'nama' => 'required',
                'jenis_buku' => 'required',
                'penulis_buku' => 'required',
            ]);
    
            $buku = new buku;
            $buku->nama = $request->nama;
            $buku->jenis_buku = $request->jenis_buku;
            $buku->penulis_buku = $request->penulis_buku;
            $buku->save();
            return redirect()->route('buku.index');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\buku  $buku
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $buku = buku::findOrFail($id);
            return view('buku.show', compact('buku'));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\buku  $buku
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $buku = buku::findOrFail($id);
            return view('buku.edit', compact('buku'));
    
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\buku  $buku
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            $request->validate([
                'nama' => 'required',
                'jenis_buku' => 'required',
                'penulis_buku' => 'required',
            ]);
    
            $buku = buku::findOrFail($id);
            $buku->nama = $request->nama;
            $buku->jenis_buku = $request->jenis_buku;
            $buku->penulis_buku = $request->penulis_buku;
            $buku->save();
            return redirect()->route('buku.index');
    
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\buku  $buku
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $buku = buku::findOrFail($id);
            $buku->delete();
            return redirect()->route('buku.index');
    
        }
    }