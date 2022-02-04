<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $User = User::all();
            return view('User.index', compact('User'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('User.create');
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
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);
    
            $User = new User;
            $User->name = $request->name;
            $User->email = $request->email;
            $User->password = bcrypt($request['password']);
            $User->save();
            return redirect()->route('User.index');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\User  $User
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $User = User::findOrFail($id);
            return view('User.show', compact('User'));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\User  $User
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $User = User::findOrFail($id);
            return view('User.edit', compact('User'));
    
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\User  $User
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);
    
            $User = User::findOrFail($id);
            $User->name = $request->name;
            $User->email = $request->email;
            $User->password = bcrypt($request['password']);
            $User->save();
            return redirect()->route('User.index');
    
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\User  $User
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $User = User::findOrFail($id);
            $User->delete();
            return redirect()->route('User.index');
    
        }
    }