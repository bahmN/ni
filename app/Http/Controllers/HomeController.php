<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller {
    public function index() {
        $aboutMe = array(
            [
                'title' => 'Молодой возраст и энергичность',
                'text' => 'Готов работать над сложными задачами и учиться новому',
            ],
            [
                'title' => 'Стремление к саморазвитию',
                'text' => 'Постоянно обучаюсь и совершенствую свои навыки',
            ],
            [
                'title' => 'Гарантия на выполненную работу',
                'text' => 'Гарантия на выполненную работу не менее 1 месяца',
            ],
            [
                'title' => 'Готовность к переговорам',
                'text' => 'Цена и сроки могут быть скорректированы в зависимости  от конкретных требований и условий проекта',
            ],
        );

        $typesOfWork = array(
            [
                'title' => 'Сайт-визитку',
                'technologies' => 'HTML+CSS+JS',
            ],
            [
                'title' => 'Web-приложение',
                'technologies' => 'Laravel+MySQL',
            ],
            [
                'title' => 'Интеграции',
                'technologies' => 'Платежные системы или другие плагины с вашей CMS/CRM системой',
            ],
            [
                'title' => 'Телеграм-бота',
                'technologies' => 'Laravel+MySQL+Telegram API',
            ],
        );

        return view('pages.home', ['aboutMe' => $aboutMe, 'typesOfWork' => $typesOfWork]);
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

        return redirect()->route('home');
    }
}
