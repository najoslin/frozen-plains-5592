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


    /**
     * Static page
     *
     * @return [type]
     */
    public function about()
    {
      return view('pages.about');
    }

    public function how_it_works()
    {
      return view('pages.how_it_works');
    }

    public function privacy_policy()
    {
      return view('pages.privacy_policy');
    }

    public function terms_of_use()
    {
      return view('pages.terms_of_use');
    }

}
