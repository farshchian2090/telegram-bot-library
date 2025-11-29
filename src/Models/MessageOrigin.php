<?php

namespace Farshchian\TelegramBotLibrary\Models;

class MessageOrigin extends BaseModel
{
    /**
     * @var string user|hidden_user|chat|channel
     */
    public string $type;
    /**
     * @var int Date the message was sent originally in Unix time
     */
    public int $date;
    public ?User $sender_user=null;
    public ?string $sender_user_name=null;
    public ?Chat $sender_chat=null;

    /**
     * @var Chat|null Channel chat to which the message was originally sent
     */
    public ?Chat $chat=null;

    public ?int $message_id=null;
}
