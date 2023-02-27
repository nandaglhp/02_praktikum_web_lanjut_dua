<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() {
        return'Hello World';
    }
    public function about() {
        return '2141720045 Ananda Galih Pratiwi';
    }
    public function articles($id) {
        return 'Halaman Artikel
        dengan ID' .$id;
    }

}
