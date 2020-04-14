<?php

namespace App\Http\Controllers;

use App\Http\Requests\Telegram\AuthRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class TelegramController extends Controller
{
    public function login(AuthRequest $request)
    {
        Log::info('Произошла авторизация с телеграмом');

        return response('', Response::HTTP_OK)->header('Access-Control-Allow-Origin', '*');
    }
}
