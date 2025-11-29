<?php

namespace Farshchian\TelegramBotLibrary\Models;

class Message extends BaseModel
{
    public int $message_id;
    public ?int $message_thread_id=null;

    public ?User $from;
    public ?Chat $sender_chat=null;

    public int $date;

    public Chat $chat;
    /**
     * @var bool|null True, if the message is sent to a forum topic
     */
    public ?bool $is_topic_message=null;
    /**
     * @var bool|null True, if the message is a channel post that was automatically forwarded to the connected discussion group
     */
    public ?bool $is_automatic_forward=null;

    public ?Message $reply_to_message=null;

    public ?string $text=null;

    /**
     * @var string|null Optional. Caption for the animation, audio, document, paid media, photo, video or voice
     */
    public ?string $caption=null;

    /**
     * @var MessageEntity[]|null
     */
    public ?array $entities=null;

    /**
     * @var PhotoSize[]|null
     */
    public ?array $photo=null;

    /**
     * @var User[]|null
     * New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     */
    public ?array $new_chat_members=null;

    /**
     * @var User|null
     * A member was removed from the group, information about them (this member may be the bot itself)
     */
    public ?User $left_chat_member=null;

    public ?Voice $voice=null;

    public ?Document $document=null;

    public ?Video $video=null;

    public ?VideoNote $video_note=null;

    public ?MessageOrigin $forward_origin=null;
}
