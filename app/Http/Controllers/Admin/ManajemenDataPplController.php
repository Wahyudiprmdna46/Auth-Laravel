<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManajemenDataPplController extends Controller
{
    public function index()
    {
        return view ('layouts.pages.manajemenDataPpl.index');
    }
}
