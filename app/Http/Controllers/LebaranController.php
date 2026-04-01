<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LebaranController extends Controller
{
    public function index() { return view('lebaran.profil'); } // Halaman Beranda
    public function cerita() { return view('lebaran.cerita'); } // Halaman Cerita
    public function galeri() { return view('lebaran.galeri'); } // Halaman Galeri
    public function kontak() { return view('lebaran.kontak');}  // Halaman Sosmed
}