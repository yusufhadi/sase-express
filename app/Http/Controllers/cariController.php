<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class cariController extends Controller
{
    public function index()
    {
        Alert::success('Barang Anda Dalam Perjalanan', 'Silahkan Tunggu');
        return view('index');
    }
}
