<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function page($page = "index"){
        if ($page === 'about') {
            return $this->about();
        } elseif ($page === 'contact') {
            return $this->contact();
        } elseif ($page === 'furniture') {
            return $this->furniture();
        } elseif ($page === 'shop') {
            return $this->shop();
        } elseif ($page === 'register_form') {
            return $this->registerForm();
        } else {
            return $this->index();
        }
    }

    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function shop() {
        return view('shop');
    }

    public function furniture() {
        return view('furniture');
    }

    public function registerForm() {
        return view('register_form');
    }
}

