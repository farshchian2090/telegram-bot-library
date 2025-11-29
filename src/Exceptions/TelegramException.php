<?php

namespace Farshchian\TelegramBotLibrary\Exceptions;

class TelegramException extends \Exception
{
    public function __construct($res)
    {
        parent::__construct(message: $res);
    }
}
