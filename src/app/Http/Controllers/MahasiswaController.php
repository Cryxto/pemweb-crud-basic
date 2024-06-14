<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        $data = Mahasiswa::all();
        return view('pages.index', compact('data'));
    }

    public function create() {
        return view('pages.create');
    }

    public function save(Request $request) {

        $validated = $request->validate([
            'name'=>'required',
            'nim'=>'required',
        ]);

        return back();
    }

}
