<?php

namespace App\Http\Controllers;
use App\Pagante;
use Illuminate\Http\Request;

class Pagantecontroller extends Controller
{
  public function index() {
    $paganti = Pagante::all();

    return view('paganti', compact('paganti'));
  }
}
