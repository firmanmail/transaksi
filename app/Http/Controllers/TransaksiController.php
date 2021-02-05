<?php

namespace App\Http\Controllers;

use App\TransaksiModel;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
    	return view('backend.transaksi.index');
    }
}