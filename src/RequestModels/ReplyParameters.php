<?php

namespace Farshchian\TelegramBotLibrary\RequestModels;

class ReplyParameters extends BaseRequestParam
{
    public function __construct(int $message_id,int|string|null $chat_id,?bool $allow_sending_without_reply=null, ?string $quote=null)
    {
        $this->message_id=$message_id;
        $this->chat_id=$chat_id;
        $this->allow_sending_without_reply=$allow_sending_without_reply;
        $this->quote=$quote;
    }

    /**
     * @var int|string|null Optional. If the message is a reply, ID of the original message
     */
    public int|string|null $chat_id;

    /**
     * @var bool Optional. Pass True, if the message should be sent even if the specified replied-to message is not found
     */
    public ?bool $allow_sending_without_reply;


    public int $message_id;


    public ?string $quote=null;
}
