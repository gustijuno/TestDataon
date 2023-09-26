<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        $title = 'Beranda Admin';
 
        return view('admin.beranda.beranda_index',compact('title'));
    }
}
