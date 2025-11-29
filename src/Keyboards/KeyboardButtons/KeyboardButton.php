<?php

namespace Farshchian\TelegramBotLibrary\Keyboards\KeyboardButtons;

class KeyboardButton extends BaseKeyboardButton
{
    public function __construct(
        public string $text,
    )
    {
    }
}
