<?php

namespace Farshchian\TelegramBotLibrary;

use Illuminate\Support\Facades\Log;

class Api
{
    public function __construct(private string $token)
    {
    }

    public function request($method, $params = [])
    {
        $url = "https://api.telegram.org/bot$this->token/$method";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array_filter($params)));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        try {
            $result = curl_exec($ch);
            curl_close($ch);
            $res = json_decode($result,false);
            if ($res && $res->ok) {
                return $res->result;
            }
            else{
                Log::emergency('Telegram Exception: method:'.$method.'---'.$res->description, array_filter($params));
            }
        } catch (\Exception $e) {
            Log::emergency('Telegram Exception:'.$method.'----'.$e->getMessage().' File:'.$e->getFile().' Line:'.$e->getLine(), array_filter($params));
        }
        return null;
    }
}
