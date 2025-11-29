<?php

namespace Farshchian\TelegramBotLibrary\Keyboards;

use Farshchian\TelegramBotLibrary\Keyboards\BaseKeyboard;
use Farshchian\TelegramBotLibrary\Keyboards\KeyboardButtons\InlineKeyboardButton;

class InlineKeyboardMarkup extends BaseKeyboard implements \JsonSerializable
{
    /**
     * @param InlineKeyboardButton[] $buttons
     * @return $this
     */
    public function row(array $buttons): static
    {
        return parent::row($buttons);
    }

    public function jsonSerialize(): array
    {
        return [
            'inline_keyboard' => $this->keyboard
        ];
    }
}
