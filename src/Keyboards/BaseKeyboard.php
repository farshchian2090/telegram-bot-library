<?php

namespace Farshchian\TelegramBotLibrary\Keyboards;

abstract class BaseKeyboard
{
    public array $keyboard=[];

    public function __construct()
    {
        $this->keyboard=[];
    }

    public static function make(): static
    {
        return new static();
    }

    public function row(array $buttons): static
    {
        $this->keyboard[] = $buttons;
        return $this;
    }
}
