<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        return view('pages.home');
    }

    public function sendRequest(Request $request) {
        mail('ivn.moneta@gmail.com', 'Тема письма', 'Текст письма', 'From: iwanaev23@gmail.com');
        return redirect()->route('home');
    }
}
