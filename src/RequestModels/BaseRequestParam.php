<?php

namespace Farshchian\TelegramBotLibrary\RequestModels;

use JsonSerializable;

class BaseRequestParam implements JsonSerializable
{
    public static function make(): static
    {
        return new static();
    }

    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }
}
