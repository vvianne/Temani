<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; 
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\View\View;
use App\Models\DiariHamil;

class DiariController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View
    {
        $diariHamilRecords = Auth::user()->diariHamil()->latest('created_at')->get();
        $currentMood = Auth::user()->diariHamil()->latest('created_at')->first();
        return view('diari', compact('diariHamilRecords', 'currentMood'));
    }

    public function create(): View
    {
        return view('diari_hamil.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'catatan' => 'required|string|max:1000',
            'perasaan' => 'required|string|max:255',
        ]);

        $validatedData['tanggal'] = Carbon::now()->toDateString();
        $validatedData['user_id'] = Auth::id();

        Auth::user()->diariHamil()->create($validatedData);
    
        return redirect()->route('diari')->with('success', 'Mood harian berhasil ditambahkan!');
    }
}
