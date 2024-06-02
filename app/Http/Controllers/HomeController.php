<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller {
    public function index() {
        return view('pages.home');
    }

    public function sendRequest(Request $request) {
        $message = "*Новая заявка*\n*От кого:* {$request['name']}\n*email:* {$request['email']}\n*Описание заказа:* {$request['details']}";
        $website = 'https://api.telegram.org/bot' . env('TELEGRAM_TOKEN', '');
        $params = [
            'chat_id' => 255499895,
            'parse_mode' => 'markdown',
            'text' => $message,
        ];
        $ch = curl_init($website . '/sendMessage');
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_exec($ch);
        curl_close($ch);

        return redirect()->route('thankyou');
    }
}
