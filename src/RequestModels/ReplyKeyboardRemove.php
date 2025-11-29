<?php

namespace Farshchian\TelegramBotLibrary\RequestModels;

class ReplyKeyboardRemove extends BaseRequestParam
{
    public function __construct($remove_keyboard=true,$selective=false)
    {
        $this->remove_keyboard=$remove_keyboard;
        $this->selective=$selective;
    }

    public bool $remove_keyboard = true;
    public bool $selective = false;

    public function setSelective(bool $selective): static{
        $this->selective=$selective;
        return $this;
    }

    public function setRemoveKeyboard($remove_keyboard): static
    {
        $this->remove_keyboard = $remove_keyboard;
        return $this;
    }
}
