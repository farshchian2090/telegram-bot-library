<?php

namespace Farshchian\TelegramBotLibrary\Keyboards;


use Farshchian\TelegramBotLibrary\Keyboards\InlineKeyboardMarkup;
use Farshchian\TelegramBotLibrary\Keyboards\ReplyKeyboardMarkup;

class Keyboard
{
    const InlineKeyboard = 0;
    const ReplyKeyboard = 1;

    public static function make($type = Keyboard::InlineKeyboard): InlineKeyboardMarkup|ReplyKeyboardMarkup
    {
        if ($type ==  Keyboard::InlineKeyboard) {
            return new InlineKeyboardMarkup();
        }
        return new ReplyKeyboardMarkup();
    }
}
