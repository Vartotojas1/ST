<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HashtagController extends Controller
{
  public function index()
  {
      $hashtags = \App\Hashtag::all();
      return view('hashtag', ['hashtags' => $hashtags]);
  }
}
