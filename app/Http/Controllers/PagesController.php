<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Show email_verify_notice page.
     *
     * @return \Illuminate\Http\Response
     */
    public function emailVerifyNotice(Request $request)
    {
        return view('pages.email_verify_notice');
    }
}
