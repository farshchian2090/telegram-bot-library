<?php

namespace Farshchian\TelegramBotLibrary\RequestModels;

use Farshchian\TelegramBotLibrary\Models\User;

class MessageEntity extends BaseRequestParam
{

    /**
     * @var string Type of the entity. Currently, can be “mention” (@username), “hashtag” (#hashtag or #hashtag@chatusername), “cashtag” ($USD or $USD@chatusername), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “blockquote” (block quotation), “expandable_blockquote” (collapsed-by-default block quotation), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames), “custom_emoji” (for inline custom emoji stickers)
     */
    public string $type;


    /**
     * @var int Offset in UTF-16 code units to the start of the entity
     */
    public int $offset;

    /**
     * @var int Length of the entity in UTF-16 code units
     */
    public int $length;

    /**
     * @var string|null Optional. For “text_link” only, URL that will be opened after user taps on the text
     */
    public ?string $url;

    /**
     * @var User|null Optional. For “text_mention” only, the mentioned user
     */
    public ?User $user;

    /**
     * @var string|null Optional. For “pre” only, the programming language of the entity text
     */
    public ?string $language;

    /**
     * @var string|null Optional. For “custom_emoji” only, unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker
     */
    public ?string $custom_emoji_id;

    public function setType(string $type): static
    {
        $this->type=$type;
        return $this;
    }

    public function setOffset(int $offset): static{
        $this->offset=$offset;
        return $this;
    }

    public function setLength(int $length): static{
        $this->length=$length;
        return $this;
    }

    public function setUrl(string $url): static{
        $this->url=$url;
        return $this;
    }

    public function setUser(User $user): static{
        $this->user=$user;
        return $this;
    }

    public function setLanguage(string $language): static{
        $this->language=$language;
        return $this;
    }

    public function setCustomEmojiId(string $custom_emoji_id): static{
        $this->custom_emoji_id=$custom_emoji_id;
        return $this;
    }
}
