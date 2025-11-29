<?php

namespace Farshchian\TelegramBotLibrary;

use Illuminate\Support\Facades\Facade;

/**
 * @see TelegramImpl
 * @mixin  TelegramImpl
 */
class Telegram extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'telegram';
    }
}
