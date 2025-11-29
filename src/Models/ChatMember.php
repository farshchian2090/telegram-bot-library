<?php

namespace Farshchian\TelegramBotLibrary\Models;

class ChatMember extends BaseModel
{
    /**
     * @var string creator|administrator|member|restricted|left|kicked
     */
    public string $status;
    public User $user;
}
