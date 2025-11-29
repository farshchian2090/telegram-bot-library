<?php

namespace Farshchian\TelegramBotLibrary\Models;

class Update extends BaseModel
{
    public int $update_id;
    public ?Message $message = null;
    public  ?CallbackQuery $callback_query = null;

    /**
     * @var Message|null Optional. New incoming channel post of any kind - text, photo, sticker, etc.
     */
    public ?Message $channel_post = null;

    public ?ChatMemberUpdated $my_chat_member=null;
}
