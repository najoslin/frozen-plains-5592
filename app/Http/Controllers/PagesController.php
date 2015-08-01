<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class PagesController extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
      $this->middleware('guest');
    }

    public function about()
    {
      return view('pages.about');
    }

}
