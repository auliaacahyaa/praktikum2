<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return 'Selamat Datang';
        }

    
    public function about() {
        echo 'Aulia Cahya <br> 2141720092';
    }

    public function articles($id) {
        echo 'Berikut adalah article ke-'.$id;
    }
}