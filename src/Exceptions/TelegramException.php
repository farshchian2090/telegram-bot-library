<?php

namespace Farshchian\TelegramBotLibrary\Exceptions;

use Illuminate\Support\Facades\Log;

class TelegramException extends \Exception
{
    public function __construct($res)
    {
        parent::__construct(message: $res);
    }
}
