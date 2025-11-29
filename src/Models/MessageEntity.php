<?php

namespace Farshchian\TelegramBotLibrary\Models;

class MessageEntity extends BaseModel
{
    /**
     * @var string
     *  Type of the entity. Currently, can be “mention” (&#64;username), “hashtag” (#hashtag or #hashtag&#64;chatusername), “cashtag” ($USD or $USD&#64;chatusername), “bot_command” (/start&#64;jobs_bot), “url” (https://telegram.org), “email” (do-not-reply&#64;telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “blockquote” (block quotation), “expandable_blockquote” (collapsed-by-default block quotation), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames), “custom_emoji” (for inline custom emoji stickers)
     */
    public string $type;

    /**
     * @var int
     * Offset in UTF-16 code units to the start of the entity
     */
    public int $offset;

    /**
     * @var int
     * Length of the entity in UTF-16 code units
     */
    public int $length;

    /**
     * @var string|null
     * For “text_link” only, url that will be opened after user taps on the text
     */
    public ?string $url = null;


    /**
     * @var User|null
     * For “text_mention” only, the mentioned user
     */
    public ?User $user;

    /**
     * @var string|null
     * For “pre” only, the programming language of the entity text
     */
    public ?string $language = null;

    /**
     * @var string|null
     * For “custom_emoji” only, unique identifier of the custom emoji
     */
    public ?string $custom_emoji = null;

}
