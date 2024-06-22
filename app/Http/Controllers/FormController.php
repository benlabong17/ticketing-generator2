<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pelaporanindex()
    {
        $title = 'Pelaporan';
        return view('form.pelaporan.index', ['title' => $title]);
    }

    public function pelaporanadd()
    {
        $title = 'Tambah Pelaporan';
        return view('form.pelaporan.add', ['title' => $title]);
    }
}
