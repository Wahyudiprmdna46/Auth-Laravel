<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataLaporanPplController extends Controller
{
    public function index()
    {
        return view ('layouts.pages.dataLaporanPpl.index');
    }
}
