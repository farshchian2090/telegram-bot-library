<?php

namespace Farshchian\TelegramBotLibrary\Keyboards\KeyboardButtons;

class InlineKeyboardButton extends BaseKeyboardButton
{
    public function __construct(
        public string $text,
        public string $callback_data = '',
        public string $url = ''
    )
    {
    }
}
