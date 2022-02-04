<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function edit()
    {
        return view('password.edit');
    }
   /**
 * @param UpdatePasswordRequest $request
 * @return \Illuminate\Http\RedirectResponse
 */
public function update(UpdatePasswordRequest $request)
{
    $request->user()->update([
        'password' => Hash::make($request->get('password'))
    ]);

    return redirect()->route('password.edit');
}
}
