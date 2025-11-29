<?php

namespace Farshchian\TelegramBotLibrary\Keyboards;

use Farshchian\TelegramBotLibrary\Keyboards\BaseKeyboard;
use Farshchian\TelegramBotLibrary\Keyboards\KeyboardButtons\KeyboardButton;

class ReplyKeyboardMarkup extends BaseKeyboard implements \JsonSerializable
{
    /**
     * @var bool
     * Optional. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to false, in which case the custom keyboard is always of the same height as the app's standard keyboard.
     */
    private bool $resize_keyboard = false;

    /**
     * @var bool
     * Optional. Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat - the user can press a special button in the input field to see the custom keyboard again. Defaults to false.
     */
    private bool $one_time_keyboard = false;

    /**
     * @var bool
     * Optional. Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are &#64;mentioned in the text of the Message object; 2) if the bot's message is a reply to a message in the same chat and forum topic, sender of the original message.
     */
    private bool $selective = false;

    private string $input_field_placeholder = '';

    /**
     * @param KeyboardButton[] $buttons
     * @return $this
     */
    public function row(array $buttons): static
    {
        return parent::row($buttons);
    }

    public function resizeKeyboard($resizeKeyboard = false): static
    {
        $this->resize_keyboard = $resizeKeyboard;
        return $this;
    }

    public function oneTimeKeyboard($one_time_keyboard = false): static
    {
        $this->one_time_keyboard = $one_time_keyboard;
        return $this;
    }

    public function selective($selective = false): static
    {
        $this->selective = $selective;
        return $this;
    }

    public function placeholder($placeholder = ''): static
    {
        $this->input_field_placeholder = $placeholder;
        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            'keyboard'                => $this->keyboard,
            'resize_keyboard'         => $this->resize_keyboard,
            'one_time_keyboard'       => $this->one_time_keyboard,
            'selective'               => $this->selective,
            'input_field_placeholder' => $this->input_field_placeholder,
        ];
    }
}
