<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class BelajarController extends Controller
{
    public function index(): View
    {
        return view('belajar');
    }

    public function enroll(): View
    {
        return view('belajar.enroll');
    }
}
