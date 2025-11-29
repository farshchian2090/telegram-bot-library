<?php

namespace Farshchian\TelegramBotLibrary\Models;

class ChatMemberUpdated extends BaseModel
{
    public Chat $chat;
    public User $from;
    public int $date;
    public ChatMember $old_chat_member;
    public ChatMember $new_chat_member;

    public 	?ChatInviteLink $invite_link=null;

    public ?bool $via_join_request=null;
    public ?bool $via_chat_folder_invite_link=null;
}
