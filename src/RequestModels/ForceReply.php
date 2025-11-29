<?php

namespace Farshchian\TelegramBotLibrary\RequestModels;

class ForceReply extends BaseRequestParam
{
    public function __construct($force_reply=true,$input_field_placeholder='',$selective=false)
    {
        $this->force_reply=$force_reply;
        $this->input_field_placeholder=$input_field_placeholder;
        $this->selective=$selective;
    }

    /**
     * @var bool Shows reply interface to the user, as if they manually selected the bot's message and tapped 'Reply'
     */
    public bool $force_reply=true;

    /**
     * @var string Optional. The placeholder to be shown in the input field when the reply is active; 1-64 characters
     */
    public string $input_field_placeholder;

    /**
     * @var bool Optional. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply to a message in the same chat and forum topic, sender of the original message.
     */
    public bool $selective=false;

    public function setForceReply(bool $force_reply): static
    {
        $this->force_reply=$force_reply;
        return $this;
    }

    public function setInputFieldPlaceholder(string $input_field_placeholder): static{
        $this->input_field_placeholder=$input_field_placeholder;
        return $this;
    }

    public function setSelective(bool $selective): static
    {
        $this->selective=$selective;
        return $this;
    }
}
