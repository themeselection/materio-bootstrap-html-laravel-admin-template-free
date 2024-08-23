<?php

namespace App\Http\Controllers\icons;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RiIcons extends Controller
{
  public function index()
  {
    return view('content.icons.icons-ri');
  }
}
