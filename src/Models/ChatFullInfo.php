<?php

namespace Farshchian\TelegramBotLibrary\Models;

class ChatFullInfo extends BaseModel
{
    /**
     * Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @var int
     */
    public int $id;
    /**
     * @var string Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
     */
    public string $type;
    /**
     * Optional. Title, for supergroups, channels and group chats
     * @var string|null
     */
    public ?string $title=null;

    /**
     * Optional. Username, for private chats, supergroups and channels if available
     * @var string|null
     */
    public ?string $username=null;

    /**
     * Optional. First name of the other party in a private chat
     * @var string|null
     */
    public ?string $first_name=null;

    /**
     * Optional. Last name of the other party in a private chat
     * @var string|null
     */
    public ?string $last_name=null;

    /**
     * Optional. True, if the supergroup chat is a forum (has topics enabled)
     * @var bool|null
     */
    public ?bool $is_forum=null;

    /**
     * Optional. True, if the chat is the direct messages chat of a channel
     * @var bool|null
     */
    public ?bool $is_direct_messages=null;

    /**
     * Optional. Chat photo
     * @var ChatPhoto|null
     */
    public ?ChatPhoto $photo=null;


}
