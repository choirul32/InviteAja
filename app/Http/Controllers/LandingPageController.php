<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
    public function index()
    {
        return view('landingpage.beranda');
    }

    public function detail1()
    {
        return view('landingpage.web1');
    }

    public function detail2()
    {
        return view('landingpage.web2');
    }

    public function detail3()
    {
        return view('landingpage.web3');
    }

    public function detail4()
    {
        return view('landingpage.digital1');
    }

    public function detail5()
    {
        return view('landingpage.digital2');
    }

    public function detail6()
    {
        return view('landingpage.digital3');
    }

    public function detail7()
    {
        return view('landingpage.digital4');
    }

    public function detail8()
    {
        return view('landingpage.digital5');
    }

    public function detail9()
    {
        return view('landingpage.digital6');
    }


    public function order()
    {
        return view('landingpage.pesan');
    }
}
