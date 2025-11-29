<?php

namespace Farshchian\TelegramBotLibrary\Models;

class CallbackQuery extends BaseModel
{
    public string $id;
    public User $from;

    /**
     * @var Message|null Optional. Message sent by the bot with the callback button that originated the query
     */
    public ?Message $message = null;

    /**
     * @var string|null Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
     */
    public ?string $inline_message_id = null;

    /**
     * @var string|null Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
     */
    public ?string $chat_instance = null;


    /**
     * @var string|null Optional. Data associated with the callback button. Be aware that the message originated the query can contain no callback buttons with this data.
     */
    public ?string $data = null;


    /**
     * @var string|null Optional. Short name of a Game to be returned, serves as the unique identifier for the game
     */
    public ?string $game_short_name = null;
}
