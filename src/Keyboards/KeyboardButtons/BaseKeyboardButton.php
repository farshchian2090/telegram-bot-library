<?php

namespace Farshchian\TelegramBotLibrary\Keyboards\KeyboardButtons;

use JsonSerializable;

class BaseKeyboardButton implements JsonSerializable
{
    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }
}
