<?php

namespace Farshchian\TelegramBotLibrary\Models;

class InaccessibleMessage extends BaseModel
{
    /**
     * @var Chat Chat the message belonged to
     */
    public Chat $chat;

    /**
     * @var int Unique message identifier inside the chat
     */
    public int $message_id;

    /**
     * @var int Always 0. The field can be used to differentiate regular and inaccessible messages.
     */
    public int $date;
}
