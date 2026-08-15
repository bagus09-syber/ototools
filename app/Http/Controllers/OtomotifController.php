<?php

namespace App\Http\Controllers;

use App\Models\Motor;

class OtomotifController extends Controller
{
    public function home()
    {
        $jumlahMotor = Motor::count();

        return view('home', compact('jumlahMotor'));
    }

    public function cc()
    {
        return view('tools.cc');
    }

    public function boreup()
    {
        return view('tools.boreup');
    }

    public function kompresi()
    {
        return view('tools.kompresi');
    }

    public function ban()
    {
        $motors = Motor::orderBy('merk')
            ->orderBy('model')
            ->get();

        return view('tools.ban', compact('motors'));
    }

    public function motor()
    {
        $motors = Motor::orderBy('merk')
            ->orderBy('model')
            ->get();

        return view('motor', compact('motors'));
    }

    public function tentang()
    {
        return view('tentang');
    }
}