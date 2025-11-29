<?php

namespace Farshchian\TelegramBotLibrary\Models;

class Chat extends BaseModel
{
    public int $id;

    /**
     * @var string Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
     */
    public string $type;
    public ?string $title = null;
    public ?string $username = null;
    public ?string $first_name = null;
    public ?string $last_name = null;

    public ?bool $is_forum = null;
    public ?bool $is_direct_messages = null;
}
