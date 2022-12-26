<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Command\DumpCompletionCommand;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'REGISTER';

        $data = [
            'title' => $title,
        ];
        return view('auth.register', $data);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|min:5',
            'usia' => 'required',
            'jeniskelamin' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        $request->session()->flash('success', 'Registrasi berhasil! silahkan login');
        return redirect('/login');
    }
}
