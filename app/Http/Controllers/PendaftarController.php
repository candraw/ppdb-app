<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function index()
    {
        return view('pages.pendaftar.index');
    }

    public function form_cpd()
    {
        return view('pages.form.form-cpd');
    }

    public function form_wali()
    {
        return view('pages.form.form-wali');
    }
}
