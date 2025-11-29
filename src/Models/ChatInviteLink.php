<?php

namespace Farshchian\TelegramBotLibrary\Models;

class ChatInviteLink extends BaseModel
{
    /**
     * @var string The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
     */
    public string $invite_link;
    public User $creator;

    /**
     * @var bool True, if users joining the chat via the link need to be approved by chat administrators
     */
    public bool $creates_join_request;

    public bool $is_primary;
    public bool $is_revoked;
}
