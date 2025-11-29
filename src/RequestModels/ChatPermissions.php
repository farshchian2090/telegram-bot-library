<?php

namespace Farshchian\TelegramBotLibrary\RequestModels;

class ChatPermissions extends BaseRequestParam
{
    public function __construct(
        public ?bool $can_send_messages = true,
        public ?bool $can_send_audios = true,
        public ?bool $can_send_documents = true,
        public ?bool $can_send_photos = true,
        public ?bool $can_send_videos = true,
        public ?bool $can_send_video_notes = true,
        public ?bool $can_send_voice_notes = true,
        public ?bool $can_send_polls = true,
        public ?bool $can_send_other_messages = true,
        public ?bool $can_add_web_page_previews = true,
        public ?bool $can_change_info = true,
        public ?bool $can_invite_users = true,
        public ?bool $can_pin_messages = true,
        public ?bool $can_manage_topics = true,
    )
    {
    }
}
